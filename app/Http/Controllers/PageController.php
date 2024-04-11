<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function ProfilePage(Request $request){
        $user = session('User');

        return view('Profile')->with('currentPage', 'Profile')->with('user', $user);
    }

    public function ChangePasswordPage(){
        return view('ChangePassword')->with('currentPage', 'ChangePassword');
    }
}
