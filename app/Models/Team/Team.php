<?php

namespace App\Models\Team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Competitions\Competition;
use App\Models\Competitions\Fixtures;
use App\Models\Competitions\Group;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';
    protected $fillable = [
        'name',
        'country',
        'date_founded',
        'manager',
        'team_bio',
        'image'
];



    protected $casts = [
        'date_founded' => 'date',
    ];

    public function player()
    {
        return $this->hasMany(Players::class,'team_id');
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
    public function groups(){
        return $this->belongsToMany(Group::class,'team_groups');

    }

}
