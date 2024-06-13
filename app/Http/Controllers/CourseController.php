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
            'title' => 'required|min:3|max:50',
            'price' => 'required|min:10000',
            'subject' => 'required',
            'grade' => 'required',
            'curriculum' => 'required',
            'detail' => 'required|min:3|max:200',
            'poster' => 'required|max:25000|mimes:svg,png,jpg,gif',
            'video' => 'required|mimes:mp4,mov'
        ], [
            'title.required' => '"Judul" tidak boleh kosong',
            'title.min' => 'Panjang "Judul" minimal 3 dan maksimal 50 huruf',
            'title.max' => 'Panjang "Judul" minimal 3 dan maksimal 50 huruf',
            'price.required' => '"Harga" tidak boleh kosong',
            'price.min' => '"Harga" minimal Rp 10.000,-',
            'subject.required' => '"Mata Pelajaran" tidak boleh kosong',
            'grade.required' => '"Jenjang" tidak boleh kosong',
            'curriculum.required' => '"Kurikulum" tidak boleh kosong)',
            'detail.required' => '"Detail" tidak boleh kosong',
            'detail.min' => 'Panjang "Detail" minimal 3 dan maksimal 50 huruf',
            'detail.max' => 'Panjang "Detail" minimal 3 dan maksimal 50 huruf',
            'poster.required' => '"Gambar Poster" tidak boleh kosong',
            'video.required' => '"Video" tidak boleh kosong'
        ]);

        dd($request->curriculum);

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
            'Curriculum' => $request->curriculum,
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

    public function Payment($CourseID){
        $CourseID = explode('-', $CourseID);
        $studentID = auth('student')->user()->id;
        $student = Student::findOrFail($studentID);

        $student->StudentCourse()->attach($CourseID);

        DB::table('carts')->where('StudentID', $studentID)->whereIn('CourseID', $CourseID)->delete();

        return redirect(route('MyCourseListPage'));
    }

    public function UpdateStudentRating(Request $request, $StudentID){
        DB::table('student_courses')
        ->where('StudentID', 'LIKE', $StudentID)
        ->where('CourseID', 'LIKE', $request->CourseID)
        ->update([
            'RatingStudent' => $request->stars
        ]);
 
        return back();
    }

    public function UpdateTutorRating(Request $request, $CourseID){
        $avg = ($request->rating_1 + $request->rating_2 + $request->rating_3 + $request->rating_4) / 4;
        DB::table('student_courses')
        ->where('StudentID', 'LIKE', auth('student')->user()->id)
        ->where('CourseID', 'LIKE', $CourseID)
        ->update([
            'RatingTutor' => $avg
        ]);

        return redirect(route('StudentReportPage'));
    }

    public function UpdateConferenceTime($StudentID, $CourseID){
        $course = DB::table('student_courses')
        ->where('StudentID', 'LIKE', $StudentID)
        ->where('CourseID', 'LIKE', $CourseID)
        ->whereNull('VideoConferenceTime')
        ->first();

        if($course){
            DB::table('student_courses')
            ->where('id', $course->id)
            ->update(['VideoConferenceTime' => now()]);
        }

        return back();
    }

    public function DownloadFile($File){
        $path = storage_path('app/public/Poster/'.$File);
        if(!file_exists($path)){
            return back();
        }
        return response()->download($path);
    }
}
