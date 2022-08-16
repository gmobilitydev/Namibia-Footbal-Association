<?php

namespace App\Models\Team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillabe = [
        'name',
        'country',
        'date_founded',
        'player_id',
        'fixture_id',
        'league_id',
        'points',
        'manager'

    ];
    public function team(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'league_id, fixture_id');
    }



}
