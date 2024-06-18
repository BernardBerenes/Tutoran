<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'MembershipName',
        'Description',
        'Discount',
        'Price',
        'Poster'
    ];

    public function StudentMembership(){
        return $this->belongsToMany(Student::class, 'student_memberships', 'MembershipID', 'StudentID');
    }
}
