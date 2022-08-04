<?php

namespace App\Models\Team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixtures extends Model
{
    use HasFactory;
    protected $table = 'fixtures';

    protected $fillable = [
        'name',
        'time_played',
        'date',
        'league',
        'score',

    ];
    
}
