<?php

namespace App\Models\Documents;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'document_id'
    ];

    public function document(){
        return $this->hasMany(Documents::class,'category_id');
    }
}
