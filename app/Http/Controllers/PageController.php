<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\ForumAnswer;
use App\Models\ForumQuestion;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Tutor;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function IndexPage(){
        $topTutor = Tutor::orderByDesc('Rating')->take(3)->get();

        return view('Index')->with('currentPage', 'Beranda')->with('topTutor', $topTutor);
    }

    public function CartPage(){
        $student = Student::findOrFail(auth('student')->user()->id);
        $course = $student->Course;
        $tutor = Tutor::all();

        return view('Cart')->with('currentPage', '')->with('course', $course)->with('tutor', $tutor);
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
        return view('AddCourse')->with('currentPage', '');
    }

    public function SubTopicPage($SubjectName){
        $subjectID = Subject::where('SubjectName', $SubjectName)->pluck('id')->first();
        if(auth('student')->check()){
            $student = Student::findOrFail(auth('student')->user()->id);
            $cart = $student->Course()->pluck('CourseID');
            $course = Course::all()->whereNotIn('id', $cart)->where('SubjectID', $subjectID);
        } else{
            $course = Course::all()->where('SubjectID', $subjectID);
        }
        $tutor = Tutor::all();

        return view('SubTopic')->with('currentPage', '')->with('course', $course)->with('tutor', $tutor);
    }

    public function TutorListPage(){
        $tutors = Tutor::all();

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

        return view('ForumDiscussionDetail')->with('currentPage', 'Forum')->with('forumQuestion', $forumQuestion)->with('forumAnswer', $forumAnswer);
    }

    public function SubjectPage(Request $request){
        $topTutor = Tutor::orderByDesc('Rating')->take(5)->get();
        $subject = Subject::distinct()->get();

        if($request->grade != null) $subject = Subject::where('Grade', $request->grade)->distinct()->get();

        return view('Subject')->with('currentPage', 'Subject')->with('topTutor', $topTutor)->with('subject', $subject)->with('grade', $request->grade);
    }

    public function StudentRatingPage(){

    }

    public function StudentRatingDetailPage(){
        return view('StudentRatingDetail')->with('currentPage', '');
    }

    public function TutorCourseListPage($TutorID){
        $course = Course::where('TutorID', $TutorID)->get();
        
        return view('TutorCourseList')->with('currentPage', 'Tutor Course List')->with('course', $course);
    }

    public function PaymentPage(){
        return view('Payment')->with('currentPage', '');
    }

    public function MembershipPage(){
        return view('Membership')->with('currentPage', '');
    }

    public function RatingTutor($TutorID){
        $tutor = Tutor::findOrFail($TutorID);

        return view('RatingTutor')->with('currentPage', '')->with('tutor', $tutor);
    }

    public function StudentReportPage(){
        $user = auth()->guard(strtolower(session('Roles')))->user();

        return view('Profile.StudentReport')->with('currentPage', 'Report')->with('user', $user);
    }

    public function LeaderboardPage(){
        $first = Tutor::orderBy('Rating', 'asc')->first();
        $second = Tutor::orderBy('Rating', 'asc')->skip(1)->first();
        $third = Tutor::orderBy('Rating', 'asc')->skip(2)->first();
        $remainTutor = Tutor::whereNotIn('id', [$first->id, $second->id, $third->id])->orderBy('Rating')->get();

        return view('Leaderboard')->with('currentPage', '')->with('first', $first)->with('second', $second)->with('third', $third)->with('remainTutor', $remainTutor);
    }

    public function CourseDetailPage(){
        return view('CourseDetail')->with('currentPage', '');
    }
    
    public function CourseDetailPaymentPage(){
        return view('CourseDetailPayment')->with('currentPage', '');
    }

    public function HistoryPage(){
        return view('Profile.History')->with('currentPage', '');
    }

    public function MyCourseListPage(){
        $course = Course::all();
        return view('MyCourseList')->with('currentPage', 'Tutor Course List')->with('course', $course);
    }
}
