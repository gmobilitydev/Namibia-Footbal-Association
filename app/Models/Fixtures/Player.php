<?php

namespace App\Models\Team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = 'players';

    protected $fillable = [
        'firstname',
        'surname',
        'DOB',
        'gender',
        'positions',
        'nationality',
        'height',
    ];

    public function teams()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
