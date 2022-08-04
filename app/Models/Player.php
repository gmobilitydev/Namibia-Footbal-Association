<?php

namespace App\Models;

use App\Models\Blog\Team;
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
        'team_id',
        'gender',
        'positions',
        'nationality',
        'height',
    ];

    public function team(){
        return $this->belongsTo(Team::class, 'team_id');
    }
}
