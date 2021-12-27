<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';
    protected $fillable = ['course_code', 'course_initial', 'name', 'credit', 'course_owner_id'];
}
