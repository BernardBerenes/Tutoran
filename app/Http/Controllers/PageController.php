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

    public function SubjectPage(){
        $course = Course::all();
        $tutor = Tutor::all();

        return view('Subject')->with('currentPage', '')->with('course', $course)->with('tutor', $tutor);
    }

    public function TutorListPage(){
        $tutors = Tutor::all();

        return view('TutorList')->with('currentPage', '')->with('tutors', $tutors);
    }

    public function TutorDetailPage($TutorID){
        $tutor = Tutor::findOrFail($TutorID);

        return view('TutorDetail')->with('currentPage', '')->with('tutor', $tutor);
    }

    public function ForumDiscussionPage(){
        $publisher = Student::all();
        $forumQuestion = ForumQuestion::orderBy('created_at', 'desc')->get();

        return view('ForumDiscussion')->with('currentPage', 'Forum')->with('question', $forumQuestion)->with('publisher', $publisher);
    }

    public function CourseListPage(){
        $topTutor = Tutor::orderByDesc('Rating')->take(5)->get();

        return view('CourseList')->with('currentPage', 'Course List')->with('topTutor', $topTutor);
    }

    public function StudentRatingPage(){

    }

    public function StudentRatingDetailPage(){
        return view('StudentRatingDetail')->with('currentPage', '');
    }

    public function TutorCourseListPage(){
        return view('TutorCourseList')->with('currentPage', '');
    }

    public function PaymentPage(){
        return view('Payment')->with('currentPage', '');
    }
}
