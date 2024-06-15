<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    public function UpdateStudentRating(Request $request, $StudentID){
        DB::table('student_courses')
        ->where('StudentID', 'LIKE', $StudentID)
        ->where('CourseID', 'LIKE', $request->CourseID)
        ->whereNull('RatingStudent')
        ->update([
            'RatingStudent' => $request->stars
        ]);
 
        return back();
    }

    public function UpdateTutorRating(Request $request, $CourseID){
        $request->validate([
            'rating_1' => 'required|integer|min:1|max:5',
            'rating_2' => 'required|integer|min:1|max:5',
            'rating_3' => 'required|integer|min:1|max:5',
            'rating_4' => 'required|integer|min:1|max:5'
        ], [
            '*.required' => 'Rating tidak boleh kosong',
            '*.min' => 'Range rating harus 1-5',
            '*.max' => 'Range rating harus 1-5'
        ]);

        $avg = ($request->rating_1 + $request->rating_2 + $request->rating_3 + $request->rating_4) / 4;
        DB::table('student_courses')
        ->where('StudentID', 'LIKE', auth('student')->user()->id)
        ->where('CourseID', 'LIKE', $CourseID)
        ->update([
            'RatingTutor' => $avg
        ]);

        return redirect(route('StudentReportPage'));
    }
}
