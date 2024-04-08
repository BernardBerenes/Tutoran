<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenthicationController extends Controller
{
    public function Register(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        Student::create([
            'Name' => $request->name,
            'Email' => $request->email,
            'Password' => $request->password
        ]);
        $request->session()->regenerate();
        $request->session()->put(['email' => $request->email]);

        return redirect(route('Home'));
    }

    public function Login(Request $request){
        $credentials = $request->only('email', 'password');

        if(Auth::guard('student')->attempt($credentials)){
            $request->session()->regenerate();
            $request->session()->put(['Email' => $request->email, 'Roles' => 'Student']);
            return redirect(route('Home'));
        } else if(Auth::guard('tutor')->attempt($credentials)){
            $request->session()->regenerate();
            $request->session()->put(['Email' => $request->email, 'Roles' => 'Tutor']);
            return redirect(route('Home'));
        }

        return back()->withErrors([
            'Email' => 'Invalid Credentials'
        ]);
    }
}
