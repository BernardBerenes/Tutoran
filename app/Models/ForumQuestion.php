<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'StudentID',
        'TutorID',
        'Question'
    ];

    public function Student(){
        return $this->belongsTo(Student::class, 'StudentID', 'id');
    }

    public function Tutor(){
        return $this->belongsTo(Tutor::class, 'TutorID', 'id');
    }
}
