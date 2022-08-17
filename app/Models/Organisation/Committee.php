<?php

namespace App\Models\Organisation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comitee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function member(){
        return $this->hasMany(Member::class,'committee_id');
    }
}
