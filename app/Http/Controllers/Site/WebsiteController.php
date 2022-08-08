<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog\Post;
use App\Gallery;

class WebsiteController extends Controller
{
    public function latestPosts(){
        $latestPostList = Post::all();
        return view('Site.index',['latestPostList'=>$latestPostList]);
    }
    public function storeImage(){
        dd($request);
    }

}
