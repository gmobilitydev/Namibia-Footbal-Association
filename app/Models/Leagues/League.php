<?php

namespace App\Models\Leagues;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class League extends Model
{
    use HasFactory;

    protected $table = 'leauges';

    protected $fillable = [
        'name',
        'slug',
    ];

    public function teams(): HasMany
    {
        return $this->hasMany(League::class, 'team_id');
    }
}
