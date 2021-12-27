<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $fillable = ['user_registration_number', 'log_number', 'text', 'send_date', 'updated_at', 'created_at'];
    protected $guarded = ['id'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function activityreport()
    {
        return $this->belongsTo(ActivityReport::class);
    }
}
