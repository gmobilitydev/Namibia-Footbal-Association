<?php

namespace App\Models\Competitions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team\Team;

class Group extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'competition_id'
    ];

    public function competitions(){
        return $this->belongsTo(Competition::class,'competition_id');
    }
    public function teams(){
        return $this->belongsToMany(Team::class,'team_groups');

    }
}
