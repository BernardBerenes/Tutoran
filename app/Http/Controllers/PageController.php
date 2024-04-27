<?php

namespace App\Http\Controllers;

use App\Models\ForumQuestion;
use App\Models\Student;
use Illuminate\Http\Request;
use PDO;

class PageController extends Controller
{
    public function IndexPage(){
        return view('Index')->with('currentPage', 'Beranda');
    }

    public function CartPage(){
        return view('Cart')->with('currentPage', '');
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
        $user = session('User');

        return view('Profile.Profile')->with('currentPage', 'Profile')->with('user', $user);
    }

    public function ChangePasswordPage(){
        return view('Profile.ChangePassword')->with('currentPage', 'ChangePassword');
    }

    public function AddCoursePage(){
        return view('AddCourse')->with('currentPage', '');
    }

    public function SubjectPage(){
        return view('Subject');
    }

    public function TutorListPage(){
        return view('TutorList');
    }

    public function ForumDiscussionPage(){
        $publisher = Student::all();
        $forumQuestion = ForumQuestion::orderBy('created_at', 'desc')->get();

        return view('ForumDiscussion')->with('currentPage', 'Forum')->with('question', $forumQuestion)->with('publisher', $publisher);
    }

    public function TutorDetailPage(){
        return view('TutorDetailPage');
    }
}
