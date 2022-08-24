<?php

namespace App\Models;

use App\Models\Leagues\League;
use App\Models\Team\Team;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Fixture extends Model
{
    use HasFactory;
    
    protected $table = 'fixtures';
    
    protected $fillable = [
        'name', 
        'date',
        'time_played',
        'home_score',
        'away_score',
    ];

    public function leagues(): BelongsTo
    {
        return $this->belongsTo(League::class, 'league_id');
    }

    public function homeTeam(): HasOne
    {
        return $this->hasOne(Team::class, 'home_team_id');
    }

    public function awayTeam(): HasOne
    {
        return $this->hasOne(Team::class, 'away_team_id');
    }
}
