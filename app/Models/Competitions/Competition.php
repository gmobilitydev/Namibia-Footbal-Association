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

    public function fixtures(){

    }
    public function teams(){

    }
    public function posts(){

    }

}
