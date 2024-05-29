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
        $posterName = $lastId.'.'.$extension;
        $request->file('poster')->storeAs('/public/Poster/', $posterName);

        $extension = $request->file('video')->getClientOriginalExtension();
        $videoName = $lastId.'.'.$extension;
        $request->file('video')->storeAs('/public/Video/', $videoName);

        Course::create([
            'TutorID' => auth('tutor')->user()->id,
            'SubjectID' => 1,
            'Title' => $request->title,
            'Price' => $request->price,
            'Lesson' => 'Matematika',
            'Curriculum' => 'K13',
            'Detail' => $request->detail,
            'Poster' => $posterName,
            'Video' => $videoName
        ]);

        return redirect(route('MyCourseListPage'));
    }

    public function InsertCart($CourseID){
        $student = Student::findOrFail(auth('student')->user()->id);
        $count = $student->Course()->where('CourseID', $CourseID)->where('StudentID', $student->id)->count();

        if($count > 0){
            return back();
        }
        $student->Course()->attach($CourseID);

        return redirect(route('CartPage'));
    }

    public function DeleteCart($CourseID){
        $student = Student::findOrFail(auth('student')->user()->id);
        $student->Course()->detach($CourseID);

        return back();
    }
}
