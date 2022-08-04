<?php

namespace App\Models\Team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;
    protected $table = 'players';

    protected $fillable = [
        'firstname',
        'surname',
        'DOB',
        'team_id',
        'gender',
        'positions',
        'nationality',
        'height',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
