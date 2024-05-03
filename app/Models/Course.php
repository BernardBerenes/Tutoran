<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'TutorID',
        'Title',
        'Price',
        'Lesson',
        'Curriculum',
        'Poster'
    ];

    public function Student(){
        return $this->belongsToMany(Student::class, 'carts', 'CourseID', 'StudentID');
    }

    public function Tutor(){
        return $this->belongsTo(Tutor::class, 'TutorID', 'id');
    }
}
