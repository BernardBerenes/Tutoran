<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class AuthenthicationController extends Controller
{
    public function Register(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $request->session()->regenerate();
        $request->session()->put(['email' => $request->email]);

        return redirect(route('Home'));
    }

    public function Login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($request)){
            $request->session()->regenerate();
            $request->session()->put(['email' => $request->email]);
            return redirect(route('Home'));
        }

        return back()->withErrors([
            'Email' => 'Invalid Credentials'
        ]);
    }
}
