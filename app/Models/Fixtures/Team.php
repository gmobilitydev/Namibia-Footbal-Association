<?php

namespace App\Models\Team;

use App\Models\Fixture;
use App\Models\Leagues\League;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillabe = [
        'name',
        'slug',
        'country',
        'date_founded',
        'points',
        'manager',
        'logo'
    ];

    public function leagues(): BelongsToMany
    {
        return $this->belongsToMany(League::class, 'league_id');
    }

    public function fixture(): BelongsToMany
    {
        return $this->belongsToMany(Fixture::class, 'fixture_id');
    }

    public function players(): HasMany
    {
        return $this->hasMany(Player::class, 'player_id');
    }

}
