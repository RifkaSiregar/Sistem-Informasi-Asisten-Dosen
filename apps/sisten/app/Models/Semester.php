<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $table = 'semester';
    protected $fillable = ['course_id', 'academic_year', 'semester', 'number_of_students', 'ta_seats'];
    public function user()
    {
        return $this->belongsToMany(User::class, 'user_semester');
    }
}
