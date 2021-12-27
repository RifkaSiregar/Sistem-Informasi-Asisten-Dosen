<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'Reports';
    protected $fillable = ['activity_date','number_of_attendance','activity_report','send_date', 'description', 'attachment'];

}
