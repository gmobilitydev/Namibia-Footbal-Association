<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog\Post;
class WebsiteController extends Controller
{
    public function latestPosts(){
        $latestPostList = Post::all();

        return view('Site.index',['latestPostList'=>$latestPostList]);
    }
}
