<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attachment_file extends Model
{
    use HasFactory;
    
    protected $table = 'attachment_file';

    protected $fillable = [
        'attachment_id',
        'file_id',
    ];
}
