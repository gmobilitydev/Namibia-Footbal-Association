<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancies extends Model
{
    use HasFactory;
    protected $table = 'vacancies';

    protected $fillable = [
        'job_title',
        'job_description',
        'start_date',
        'end_date',
        'status'
    ];
}


