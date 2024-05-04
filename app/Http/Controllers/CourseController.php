<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function AddCourse(Request $request){
        $request->validate([
            // 'title' => 'required',
            // 'price' => 'required',
            // 'poster' => 'required|max:25000|mimes:png,jpg,jpeg,svg'
        ]);

        $lastId = Course::latest()->value('id') + 1;
        $extension = $request->file('poster')->getClientOriginalExtension();
        $fileName = $lastId.'.'.$extension;
        $request->file('poster')->storeAs('/public/Poster/', $fileName);

        Course::create([
            'TutorID' => auth('tutor')->user()->id,
            'Title' => $request->title,
            'Price' => $request->price,
            'Lesson' => 'Matematika',
            'Curriculum' => 'K13',
            'Poster' => $fileName
        ]);

        return redirect(route('SubjectPage'));
    }

    public function InsertCart($CourseID){
        $student = Student::findOrFail(auth('student')->user()->id);
        $count = $student->Course()->where('CourseID', $CourseID)->where('StudentID', $student->id)->count();

        if($count > 0){
            return back();
        }
        $student->Course()->attach($CourseID);

        return back();
    }

    public function DeleteCart($CourseID){
        $student = Student::findOrFail(auth('student')->user()->id);
        $student->Course()->detach($CourseID);

        return back();
    }
}
