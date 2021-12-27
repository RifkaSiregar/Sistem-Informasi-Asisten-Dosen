<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogActivity extends Model
{
    use HasFactory;

    protected $table = 'userlogactivity';
    protected $fillable = ['initial', 'activity', 'created_at', 'updated_at'];
}
