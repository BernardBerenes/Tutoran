<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function UpdateProfile(Request $request){
        $request->validate([
            'phoneNumber' => 'required|min:12|max:13|numeric'
        ], [
            'phoneNumber.required' => '"Nomor HP" tidak boleh kosong',
            'phoneNumber.min' => 'Panjang "Nomor HP" minimal 12 dan maksimal 13 angka',
            'phoneNumber.max' => 'Panjang "Nomor HP" minimal 12 dan maksimal 13 angka',
            'phoneNumber.numeric' => '"Nomor HP" harus berisi angka'
        ]);

        if(session('Roles') == 'Student'){
            Student::findOrFail(auth('student')->user()->id)->update([
                'Gender' => $request->gender,
                'DateOfBirth' => $request->dob,
                'PhoneNumber' => $request->phoneNumber
            ]);
        } else{
            Tutor::findOrFail(auth('tutor')->user()->id)->update([
                'Gender' => $request->gender,
                'DateOfBirth' => $request->dob,
                'PhoneNumber' => $request->phoneNumber,
                'Background' => $request->background
            ]);
        }

        return back();
    }

    public function ChangePassword(Request $request){
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:8'
        ], [
            'currentPassword' => '"Kata Sandi Sekarang" harus diisi',
            'newPassword.required' => '"Kata Sandi Baru" harus diisi',
            'newPassword.min' => 'Panjang minimal "Kata Sandi Baru" 8 huruf'
        ]);

        if(auth('student')->check()){
            if(!Hash::check($request->currentPassword, auth('student')->user()->Password)){
                return back()->withErrors([
                    'currentPassword' => 'Kata Sandi salah!!'
                ]);
            } 
        } else{
            if(!Hash::check($request->currentPassword, auth('tutor')->user()->Password)){
                return back()->withErrors([
                    'currentPassword' => 'Kata Sandi salah!!'
                ]);
            } 
        }

        if(session('Roles') == 'Student'){
            Student::findOrFail(auth('student')->user()->id)->update([
                'Password' => $request->newPassword
            ]);
        } else{
            Tutor::findOrFail(auth('tutor')->user()->id)->update([
                'Password' => $request->newPassword
            ]);
        }
        return redirect(route('ProfilePage'));
    }

    public function ChangePicture(Request $request){
        if(Storage::exists('/public/Profile Picture/'.session('Roles').'/'.auth()->guard(strtolower(session('Roles')))->user()->Image) && auth()->guard(strtolower(session('Roles')))->user()->Image != 'Default.png'){
            Storage::delete('/public/Profile Picture/'.session('Roles').'/'.auth()->guard(strtolower(session('Roles')))->user()->Image);
        }
        
        $id = auth(strtolower(session('Roles')))->user()->id;
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
