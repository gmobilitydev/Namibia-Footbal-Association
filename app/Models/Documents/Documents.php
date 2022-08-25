<?php

namespace App\Models\Documents;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;

    protected $table ='documents';

    protected $fillable = [
        'title',
        'description',
        'category',
        'category_id',
        'file'
    ];

    public function category(){
        return $this->belongsTo(DocCategory::class,'category_id');
    }


}
