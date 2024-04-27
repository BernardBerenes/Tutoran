<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function UpdateProfile(Request $request){
        // Validation (Requirement)
        if(session('Roles') == 'Student'){
            Student::findOrFail(session('User')->id)->update([
                'Gender' => $request->gender,
                'DateOfBirth' => $request->dob,
                'PhoneNumber' => $request->phoneNumber
            ]);
            $user = Auth::guard('student')->user();
            $request->session()->put([
                'Roles' => 'Student',
                'User' => $user
            ]);
        } else{
            // For Tutor
        }

        return back();
    }

    public function ChangePassword(Request $request){
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required'
        ]);
        
        if(!Hash::check($request->currentPassword, session('User')->Password)){
            return back()->withErrors([
                'currentPassword' => 'Kata Sandi salah!!'
            ]);
        } 

        if(session('Roles') == 'Student'){
            Student::findOrFail(session('User')->id)->update([
                'Password' => $request->newPassword
            ]);
        } else{
            Tutor::findOrFail(session('User')->id)->update([
                'Password' => $request->newPassword
            ]);
        }
        session('User')->Password = $request->newPassword;
        return back();
    }

    public function ChangePicture(Request $request){
        $extension = $request->file('image')->getClientOriginalExtension();
        $fileName = session('User')->id.'.'.$extension;
        $request->file('image')->storeAs('/public/Profile Picture/', $fileName);
        session('User')->Image = $fileName;

        if(session('Roles') == 'Student'){
            Student::findOrFail(session('User')->id)->update([
                'Image' => $fileName
            ]);
        } else{
            Tutor::findOrFail(session('User')->id)->update([
                'Image' => $fileName
            ]);
        }

        return back();
    }
}
