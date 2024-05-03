<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenthicationController extends Controller
{
    public function Register(Request $request){
        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|regex:/^\S+@\S+\.\S+$/',
            'password' => 'required|min:8'
        ]);

        $credentials = $request->only('email', 'password');
        Student::create([
            'Name' => $request->name,
            'Email' => $request->email,
            'Password' => $request->password
        ]);
        Auth::guard('student')->attempt($credentials);
        $request->session()->regenerate();
        $request->session()->put([
            'Roles' => 'Student',
        ]);

        return redirect(route('IndexPage'));
    }

    public function Login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::guard('student')->attempt($credentials)){
            $request->session()->put([
                'Roles' => 'Student'
            ]);
        } else if(Auth::guard('tutor')->attempt($credentials)){
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
        $request->session()->put(['Roles' => null]);

        return redirect(route('IndexPage'));
    }
}
