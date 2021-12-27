<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    protected $table = 'log_activity';
    protected $fillable = [
        'semester_id',
        'schedule_id',
        'attendance',
        'activity_type',
        'date_time',
        'description',
        'activityreport',
        'status',
        'attachment',
        'create_at',
        'update_at'
    ];

}
