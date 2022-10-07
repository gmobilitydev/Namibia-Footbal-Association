<?php

namespace App\Models\Documents;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Competitions\Competition;

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
        return $this->belongsTo(DocCategory::class,'categoryid');
    }
    public function competitions(){
        return $this->belongsTo(Competition::class,'document_id');
    }

}
