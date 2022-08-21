<?php

namespace App\Models\Team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Competitions\Competition;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillable = [
        'name',
        'country',
        'date_founded',
        'manager'

    ];
    public function player()
    {
        return $this->hasMany(Player::class,'team_id');
    }

    public function competitions(){
        return $this->belongsToMany(Competition::class,'competition_team');
    }

    public function homeFixtures(){
        return $this->hasMany(Fixtures::class,'home_team');
    }
    public function awayFixtures(){
        return $this->hasMany(Fixtures::class,'away_team');
    }


}
