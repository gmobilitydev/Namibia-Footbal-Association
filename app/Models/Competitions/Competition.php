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
    protected $casts = [
        'launch_date' => 'date',
    ];

    public function fixtures(){
        return $this->hasMany(Fixtures::class, 'competition_id');
    }
    public function teams(){
        return $this->belongsToMany(Team::class,'competition_team');
    }
    public function posts(){

    }

}
