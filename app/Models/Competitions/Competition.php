<?php

namespace App\Models\Competitions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team\Team;
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
        return $this->belongsToMany(Team::class,'competition_team');
    }
    public function posts(){

    }

}
