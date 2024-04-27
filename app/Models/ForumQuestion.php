<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'StudentID',
        'Question'
    ];

    public function Student(){
        return $this->belongsTo(Student::class, 'StudentID', 'id');
    }
}
