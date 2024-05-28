<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Tutor extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticatableTrait;

    protected $fillable = [
        'Name',
        'Email',
        'Password',
        'Gender',
        'DateOfBirth',
        'PhoneNumber',
        'Background',
        'Rating',
        'Image'
    ];

    protected $hidden = [
        'Password'
    ];

    protected $casts = [
        'Password' => 'hashed'
    ];

    public function getAuthPassword()
    {
        return $this->Password;
    }

    public function Course(){
        return $this->hasMany(Course::class, 'TutorID');
    }
}
