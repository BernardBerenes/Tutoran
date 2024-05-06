<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\ForumQuestion;
use App\Models\Student;
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

    public function SubTopicPage(){
        $student = Student::findOrFail(auth('student')->user()->id);
        $cart = $student->Course()->pluck('CourseID');
        $course = Course::whereNotIn('id', $cart)->get();
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

    public function ForumDiscussionPage(){
        $publisher = Student::all();
        $forumQuestion = ForumQuestion::orderBy('created_at', 'desc')->get();

        return view('ForumDiscussion')->with('currentPage', 'Forum')->with('question', $forumQuestion)->with('publisher', $publisher);
    }

    public function SubjectPage(){
        $topTutor = Tutor::orderByDesc('Rating')->take(5)->get();

        return view('Subject')->with('currentPage', 'Subject')->with('topTutor', $topTutor);
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

        return view('StudentReport')->with('currentPage', '')->with('user', $user);
    }
}
