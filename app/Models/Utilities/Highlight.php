<?php

namespace App\Models\Utilities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    use HasFactory;

    protected  $fillable = [
        'title',
        'link'
    ];
}
