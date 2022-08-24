<?php

namespace App\Models\Competitions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team\Team;
use App\Models\Competitions\Competition;

class Fixtures extends Model
{
    use HasFactory;

    protected $fillable = [
        'competition_id',
        'home_team',
        'away_team',
        'date',
        'home_result',
        'away_result'
    ];

    public function competitions(){
        return $this->belongsTo(Competition::class, 'competition_id');
    }

    public function home(){
        return $this->belongsTo(Team::class,'home_team');
    }
    public function away(){
        return $this->belongsTo(Team::class,'away_team');

    }
}
