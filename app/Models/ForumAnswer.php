<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'QuestionID',
        'StudentID',
        'TutorID',
        'Answer'
    ];

    public function Student(){
        return $this->belongsTo(Student::class, 'StudentID', 'id');
    }

    public function Tutor(){
        return $this->belongsTo(Tutor::class, 'TutorID', 'id');
    }
}
