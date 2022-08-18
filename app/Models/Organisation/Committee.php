<?php

namespace App\Models\Organisation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Committee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function member(): HasMany
    {
        return $this->hasMany(Member::class,'committee_id');
    }
}
