<?php

namespace App\Models\Team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillable = [
        'name',
        'country',
        'date_founded',
        'manager'

    ];
    public function player()
    {
        return $this->hasMany(Player::class,'team_id');
    }


}
