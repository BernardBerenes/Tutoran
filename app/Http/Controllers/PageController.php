<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function IndexPage(){
        $email = session()->get('Email');

        return view('Index')->with('email', $email);
    }

    public function CartPage(){
        return view('Cart');
    }

    public function RegisterPage(){
        return view('Authenthication.Register');
    }

    public function LoginPage(){
        return view('Authenthication.Login');
    }
}
