<?php

namespace App\Models\Team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';

    protected $fillabe = [
        'name',
        'country',
        'date_founded',
        'player_id',
        'fixture_id',
        'leagure',
        'points',
        'manager'

    ];
    public function team()
    {
        return $this->belongsTo(Team::class, 'player_id, fixture_id');
    }
}
