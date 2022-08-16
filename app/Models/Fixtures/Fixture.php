<?php

namespace App\Models;

use App\Models\Leagues\League;
use App\Models\Team\Team;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function leagues(): HasMany
    {
        return $this->hasMany(League::class, 'league_id');
    }

    public function teams(): HasMany
    {
        return $this->hasMany(Team::class, 'team_id');
    }
}
