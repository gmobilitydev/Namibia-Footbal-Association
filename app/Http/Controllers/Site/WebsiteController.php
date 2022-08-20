<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog\Post;
use App\Gallery;
use App\Models\Vacancies\Vacancy;
use App\Models\Documents\Documents;
use App\Models\Competitions\Competition;
use App\Models\Organisation\Committee;

use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    /**
     * Home Module
     */
    public function latestPosts(){
        $latestPostList = Post::orderBy('created_at','desc')->limit(5)->get();

        return view('Site.index',['latestPostList'=>$latestPostList]);
    }

/**
 *
 * Vacancy Module
 */
    public function vacancies(){
        $vacancyList = Vacancy::all();
        return view('Site.vacancies.index',['vacancyList'=>$vacancyList]);

    }
    /**
     *
     * Documents Module
     */
    public function documents(){
        $documentlist = Documents::all();
        return view('Site.AboutUs.docs',['documentlist'=>$documentlist]);

    }
    /**
     *
     * News Center Code
     */
    public function newsCenter(){

        $latestPostList = Post::orderBy('published_at','desc')->paginate(20);
        return view('Site.NewsCenter.news',['latestPostList'=>$latestPostList]);
    }

    public function showPost(Post $post){
        return view('Site.NewsCenter.post',['post'=>$post]);
    }

    /**
     *
     * Competitions Module
     */
    public function competitions(){
        $competitions = Competition::all();
        return view('Site.Competitions.competitions',['competitions'=>$competitions]);
    }

    public function showCompetition(Competition $comp){
        $categoryName =$comp->name;
        $posts = Post::where('category', $categoryName)->get();

        return view('Site.Competitions.show',['comp'=>$comp]);
    }

    /**
     *
     * About Us Module
     */

    public function organisation(){
        $committeeList = Committee::with('member')->get();
        return view('Site.AboutUs.org',['committeeList'=>$committeeList]);
    }

}
