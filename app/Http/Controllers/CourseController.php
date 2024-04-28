<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function AddCourse(Request $request){
        // Validation

        // $extension = $request->file('image')->getClientOriginalExtension();
        // $fileName = $request->name.'.'.$extension;
        // $request->file('image')->storeAs('/public/Course Poster/', $fileName);
        
        $lastId = DB::table('courses')->insertGetId([
            'TutorID' => session('User')->id,
            'Title' => $request->title,
            'Price' => $request->price,
            'Lesson' => 'Matematika',
            'Curriculum' => 'K13',
            'Poster' => 'Test'
        ]);

        dd($lastId);

        return redirect(route('IndexPage'));
    }
}
