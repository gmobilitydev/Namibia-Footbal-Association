<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog\Post;
use App\Gallery;

use App\Models\Vacancies\Vacancy;
use App\Models\Documents\Documents;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function latestPosts(){
        $latestPostList = Post::all();
        return view('Site.index',['latestPostList'=>$latestPostList]);
    }


    public function vacancies(){
        $vacancyList = Vacancy::all();
        return view('Site.vacancies.index',['vacancyList'=>$vacancyList]);

    }

    public function documents(){
        $documentlist = Documents::all();
        return view('Site.AboutUs.docs',['documentlist'=>$documentlist]);

    }
    /**
     *
     * News Center Code
     */
    public function newsCenter(){

        $latestPostList = Post::paginate(20);
        $latestPostList->setCollection($latestPostList->sortByDesc('created_at'));
        return view('Site.NewsCenter.news',['latestPostList'=>$latestPostList]);
    }

    public function showPost(Post $post){
        return view('Site.NewsCenter.post',['post'=>$post]);
    }

}
