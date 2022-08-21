<?php

namespace App\Models\Team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;

    protected $table = 'players';

    protected $fillable = [
        'first_names',
        'last_name',
        'dob',
        'team_id',
        'image',
        'gender',
        'position',
        'nationality',
        'height',
    ];

    public function player()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
