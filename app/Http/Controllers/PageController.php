<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\ForumAnswer;
use App\Models\ForumQuestion;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    private function CheckVideoConferenceTime(){
        if(auth('student')->check()){
            $temp = DB::table('student_courses')
            ->join('courses', 'student_courses.CourseID', '=', 'courses.id')
            ->join('tutors', 'courses.TutorID', '=', 'tutors.id')
            ->where('student_courses.StudentID', 'LIKE', auth('student')->user()->id)
            ->where(DB::raw('DATE_ADD(VideoConferenceTime, INTERVAL 1 MINUTE)'), '<', now())
            ->first(['courses.TutorID', 'student_courses.CourseID']);

            return $temp;
        }
    }

    public function IndexPage(){
        $temp = PageController::CheckVideoConferenceTime();
        if($temp){
            return redirect(route('RatingTutorPage', ['TutorID'=>$temp->TutorID, 'CourseID'=>$temp->CourseID]));
        }

        $topTutor = Tutor::orderByDesc('Rating')->take(3)->get();
        return view('Index')->with('currentPage', 'Beranda')->with('topTutor', $topTutor);

    }

    public function CartPage(){
        $student = Student::findOrFail(auth('student')->user()->id);
        $course = $student->Course;
        $price = $course->sum('Price');
        $tutor = Tutor::all();

        return view('Cart')->with('currentPage', '')->with('course', $course)->with('price', $price)->with('tutor', $tutor);
    }

    public function RegisterPage(){
        return view('Authenthication.Register');
    }

    public function LoginPage(){
        return view('Authenthication.Login');
    }

    public function AboutUsPage(){
        return view('AboutUs')->with('currentPage', 'About Us');
    }

    public function ProfilePage(){
        $user = auth()->guard(strtolower(session('Roles')))->user();

        return view('Profile.Profile')->with('currentPage', 'Profile')->with('user', $user);
    }

    public function ChangePasswordPage(){
        return view('Profile.ChangePassword')->with('currentPage', 'ChangePassword');
    }

    public function AddCoursePage(){
        $subject = Subject::select('SubjectName')->distinct()->get();

        return view('AddCourse')->with('currentPage', '')->with('subject', $subject);
    }

    public function SubTopicPage($SubjectName){
        $subjectID = Subject::where('SubjectName', $SubjectName)
        ->pluck('id');

        if(auth('student')->check()){
            $student = Student::findOrFail(auth('student')->user()->id);
            $cart = $student->Course()->pluck('CourseID');
            if($subjectID->isEmpty()) {
                $course = Course::all()->whereNotIn('id', $cart);
            } else{
                $course = Course::whereNotIn('id', $cart)
                ->whereIn('SubjectID', $subjectID)
                ->get();
            }
        } else{
            $course = Course::whereIn('SubjectID', $subjectID)->get();
        }
        $tutor = Tutor::all();

        return view('SubTopic')->with('currentPage', '')->with('course', $course)->with('tutor', $tutor);
    }

    public function TutorListPage(Request $request){
        if(!$request->tutorToFind){
            $tutors = Tutor::all();
        } else{
            $tutors = Tutor::where('Name', 'LIKE', '%'.$request->tutorToFind.'%')->get();
        }

        return view('TutorList')->with('currentPage', '')->with('tutors', $tutors);
    }

    public function TutorDetailPage($TutorID){
        $tutor = Tutor::findOrFail($TutorID);
        $course = Course::where('TutorID', $TutorID)->get();

        return view('TutorDetail')->with('currentPage', '')->with('tutor', $tutor)->with('course', $course);
    }

    public function ForumDiscussionPage(Request $request){
        $publisher = Student::all();

        if($request->sorting == 'newest' || $request->sorting == null) $forumQuestion = ForumQuestion::orderBy('created_at', 'desc')->get();
        else $forumQuestion = ForumQuestion::orderBy('created_at', 'asc')->get();

        return view('ForumDiscussion')->with('currentPage', 'Forum')->with('question', $forumQuestion)->with('publisher', $publisher)->with('sorting', $request->sorting);
    }

    public function ForumDiscussionDetailPage($QuestionID){
        $forumQuestion = ForumQuestion::findOrFail($QuestionID);
        $forumAnswer = ForumAnswer::where('QuestionID', $QuestionID)->get();

        return view('ForumDiscussionDetail')->with('currentPage', 'Forum')->with('forumQuestion', $forumQuestion)->with('forumAnswer', $forumAnswer)->with('QuestionID', $QuestionID);
    }

    public function SubjectPage(Request $request){
        $topTutor = Tutor::orderByDesc('Rating')->take(5)->get();
        $subject = Subject::distinct()->orderBy('SubjectName')->get(['SubjectName']);
        
        if($request->grade != null) $subject = Subject::where('Grade', $request->grade)->distinct()->orderBy('SubjectName')->get();

        return view('Subject')->with('currentPage', 'Subject')->with('topTutor', $topTutor)->with('subject', $subject)->with('grade', $request->grade);
    }

    public function TutorCourseListPage($TutorID){
        $course = Course::where('TutorID', $TutorID)->get();
        
        return view('TutorCourseList')->with('currentPage', 'Tutor Course List')->with('course', $course);
    }

    public function PaymentPage($CourseID){
        $invoiceNumber = sprintf('%s%010d', "TUT", rand(1, 999999999));
        $CourseID = explode('-', $CourseID);
        $course = Course::find($CourseID);
        $price = $course->sum('Price');
        $CourseID = implode('-', $CourseID);
        session()->put('realPrice', $price);
        if(!session('invoiceNumber')){
            session()->put('invoiceNumber', $invoiceNumber);
        };
        if(!session('usedCoupon')) session()->put('price', $price);

        return view('Payment')->with('currentPage', '')->with('ids', $CourseID)->with('invoiceNumber', $invoiceNumber);
    }

    public function MembershipPage(){
        return view('Membership')->with('currentPage', '');
    }

    public function MembershipDetailPage(){
        return view('MembershipDetail')->with('currentPage', '');
    }

    public function RatingTutorPage($TutorID, $CourseID){
        $tutor = Tutor::findOrFail($TutorID);
        $course = Course::findOrFail($CourseID);

        return view('RatingTutor')->with('currentPage', '')->with('tutor', $tutor)->with('course', $course);
    }

    public function StudentReportPage(){
        $user = auth()->guard(strtolower(session('Roles')))->user();
        if(auth('tutor')->check()){
            $student = DB::table('students')
            ->join('student_courses', 'students.id', '=', 'student_courses.StudentID')
            ->join('courses', 'student_courses.CourseID', '=', 'courses.id')
            ->where('courses.TutorID', $user->id)
            ->select(
                'students.id as id',
                'students.name as StudentName',
                DB::raw('AVG(student_courses.RatingStudent) as StudentRating')
            )
            ->groupBy('students.id', 'students.name')
            ->get();

            return view('Profile.StudentReport')->with('currentPage', 'Report')->with('user', $user)->with('student', $student);
        } else{
            $averageRating = DB::table('student_courses')
            ->where('StudentID', $user->id)
            ->avg('RatingStudent');

            $course = DB::table('student_courses')
            ->join('courses', 'student_courses.CourseID', '=', 'courses.id')
            ->where('StudentID', 'LIKE', $user->id)
            ->get();

            return view('Profile.StudentReport')->with('currentPage', 'Report')->with('user', $user)->with('course', $course)->with('avg', $averageRating);
        }

    }

    public function StudentRatingDetailPage($StudentID){
        $student = Student::findOrFail($StudentID);
        $studentCourse = DB::table('student_courses')
        ->join('courses', 'student_courses.CourseID', '=', 'courses.id')
        ->where('student_courses.StudentID', 'LIKE', $student->id)
        ->get();

        return view('StudentRatingDetail')->with('currentPage', '')->with('student', $student)->with('studentCourse', $studentCourse);
    }

    public function LeaderboardPage(){
        $topTutor = Tutor::orderBy('Rating', 'asc')->take(3)->get();
        $topTutorID = $topTutor->pluck('id');
        $remainTutor = Tutor::whereNotIn('id', $topTutorID)->orderBy('Rating')->get();

        return view('Leaderboard')->with('currentPage', '')->with('topTutor', $topTutor)->with('remainTutor', $remainTutor);
    }

    public function CourseDetailPage($CourseID){
        $course = Course::findOrFail($CourseID);

        return view('CourseDetail')->with('currentPage', '')->with('course', $course);
    }
    
    public function CourseDetailPaymentPage($CourseID){
        $course = Course::findOrFail($CourseID);

        return view('CourseDetailPayment')->with('currentPage', '')->with('course', $course);
    }

    public function HistoryPage(){
        return view('Profile.History')->with('currentPage', '');
    }

    public function MyCourseListPage(Request $request){
        if(auth('student')->check()){
            $studentID = auth('student')->user()->id;
            if(!$request->courseToFind){
                $course = DB::table('student_courses')
                ->join('courses', 'student_courses.CourseID', '=', 'courses.id')
                ->join('tutors', 'courses.TutorID', '=', 'tutors.id')
                ->where('student_courses.StudentID', $studentID)
                ->select('courses.*', 'tutors.name as Name', 'student_courses.created_at as created_at')
                ->get();
            } else{
                $course = DB::table('student_courses')
                ->join('courses', 'student_courses.CourseID', '=', 'courses.id')
                ->join('tutors', 'courses.TutorID', '=', 'tutors.id')
                ->where('student_courses.StudentID', $studentID)
                ->where('courses.Title', 'LIKE', '%'.$request->courseToFind.'%')
                ->select('courses.*', 'tutors.name as Name', 'student_courses.created_at as created_at')
                ->get();
            }
        } else{
            $tutorID = auth('tutor')->user()->id;
            $course = Course::where('TutorID', 'like', $tutorID)->get();

            if($request->courseToFind){
                $course = Course::where('TutorID', 'like', $tutorID)
                ->where('Title', 'LIKE', '%'.$request->courseToFind.'%')
                ->get();
            }
        }
    
        return view('MyCourseList')->with('currentPage', 'Tutor Course List')->with('course', $course);
    }

    public function FAQPage(){
        return view('FAQ')->with('currentPage', '');
    }

    public function JobVacancyPage(){
        return view('JobVacancy')->with('currentPage', '');
    }
}
