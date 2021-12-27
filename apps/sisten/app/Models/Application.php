<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    use HasFactory;
    
    protected $table = 'application';

    protected $fillable = [
        'applicant_number',
        'participant_registration_number',
        'vacancy_id',
        'send_date',
        'score',
        'motivation',
        'decision',
        'decision_date',
        'created_at',
        'updated_at',
    ];
}
