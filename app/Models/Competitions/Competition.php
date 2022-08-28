<?php

namespace App\Models\Competitions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team\Team;
use App\Models\Blog\Post;
class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'content',
        'launch_date',
        'status',
        'badge',

    ];
    protected $casts = [
        'launch_date' => 'date',
    ];

    public function fixtures(){
        return $this->hasMany(Fixtures::class, 'competition_id');
    }
    public function teams(){
        return $this->belongsToMany(Team::class,'competition_team');
    }
    public function posts(){
        return $this->hasMany(Post::class, 'blog_competition_id');
    }
    public function groups(){
        return $this->hasMany(Group::class,'competition_id');
    }

}
