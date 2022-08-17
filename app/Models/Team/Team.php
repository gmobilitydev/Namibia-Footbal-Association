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
        'fixture_id',
        'leagure',
        'points',
        'manager'

    ];
    public function player()
    {
        return $this->hasMany(Player::class,'team_id');
    }
    public function fixtures()
    {
        return $this->hasMany(fixtures::class,'fixture_id');
    }

}
