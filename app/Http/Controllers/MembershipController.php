<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function Payment($MembershipID){
        $studentID = auth('student')->user()->id;
        $student = Student::findOrFail($studentID);

        $student->StudentMembership()->attach($MembershipID);

        return redirect(route('HistoryPage'));
    }
}
