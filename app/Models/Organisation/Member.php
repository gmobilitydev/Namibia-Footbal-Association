<?php

namespace App\Models\Organisation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_names',
        'last_name',
        'nationality',
        'image',
        'position',
        'description'
    ];
  public function committees(): BelongsTo
  {
    return $this->belongsTo(Committee::class,'committee_id');
  }
}
