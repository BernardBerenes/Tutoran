<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
        if(Storage::exists('/public/Profile Picture/'.session('Roles').'/'.auth()->guard(strtolower(session('Roles')))->user()->Image) && auth()->guard(strtolower(session('Roles')))->user()->Image != 'Default.png'){
            Storage::delete('/public/Profile Picture/'.session('Roles').'/'.auth()->guard(strtolower(session('Roles')))->user()->Image);
        }
        $id = auth()->guard(strtolower(session('Roles')))->user()->id;
        $extension = $request->file('image')->getClientOriginalExtension();
        $fileName = $id.'.'.$extension;

        if(session('Roles') == 'Student'){
            Student::findOrFail($id)->update([
                'Image' => $fileName
            ]);
            $request->file('image')->storeAs('/public/Profile Picture/Student/', $fileName);
        } else{
            Tutor::findOrFail($id)->update([
                'Image' => $fileName
            ]);
            $request->file('image')->storeAs('/public/Profile Picture/Tutor/', $fileName);
        }

        return back();
    }
}
