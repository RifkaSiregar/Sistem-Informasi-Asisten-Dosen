<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSemester extends Model
{
    protected $table = 'user_semester';
    protected $fillable = ['user_id', 'semester_id'];
}
