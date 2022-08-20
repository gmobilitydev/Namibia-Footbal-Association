<?php

namespace App\Models\Competitions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'content',
        'launch_date',
        'status'
    ];
}
