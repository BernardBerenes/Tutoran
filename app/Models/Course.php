<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'TutorID',
        'SubjectID',
        'Title',
        'Price',
        'Detail',
        'Curriculum',
        'Poster',
        'Video'
    ];

    public function Student(){
        return $this->belongsToMany(Student::class, 'carts', 'CourseID', 'StudentID');
    }

    public function StudentCourse(){
        return $this->belongsToMany(Student::class, 'student_courses', 'CourseID', 'StudentID');
    }

    public function Tutor(){
        return $this->belongsTo(Tutor::class, 'TutorID', 'id');
    }

    public function Subject(){
        return $this->belongsTo(Subject::class, 'SubjectID', 'id');
    }
}
