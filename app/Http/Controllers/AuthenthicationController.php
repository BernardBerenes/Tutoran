<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenthicationController extends Controller
{
    public function Register(Request $request){
        // Validation
        $credentials = $request->only('email', 'password');
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        Student::create([
            'Name' => $request->name,
            'Email' => $request->email,
            'Password' => $request->password
        ]);
        Auth::guard('student')->attempt($credentials);
        $user = Auth::guard('student')->user();
        $request->session()->regenerate();
        $request->session()->put([
            'Roles' => 'Student',
            'User' => $user
        ]);

        return redirect(route('IndexPage'));
    }

    public function Login(Request $request){
        // Validation
        $credentials = $request->only('email', 'password');
        if(Auth::guard('student')->attempt($credentials)){
            $user = Auth::guard('student')->user();
            $request->session()->put([
                'Roles' => 'Student'
            ]);
        } else if(Auth::guard('tutor')->attempt($credentials)){
            $user = Auth::guard('tutor')->user();
            $request->session()->put([
                'Roles' => 'Tutor'
            ]);
        } else{
            return back()->withErrors([
                'Password' => 'Invalid Credentials'
            ]);
        }
        $request->session()->regenerate();
        return redirect(route('IndexPage'));
    }

    public function Logout(Request $request){
        Auth::guard(strtolower(session()->get('Roles')))->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->put(['Email' => null, 'Roles' => null]);

        return redirect(route('IndexPage'));
    }
}
