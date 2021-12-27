<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'schedule';
    
    protected $fillable = ['semester_id', 'session_name', 'duration', 'week', 'date_time'];
}
