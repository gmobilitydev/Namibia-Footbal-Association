<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\WebsiteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebsiteController::class, 'latestPosts']);

Route::get('/news', function(){
    return view('Site.NewsCenter.news');
});

Route::get('/warriors', function(){
    return view('Site.Men.men');
});

Route::get('/gladiators', function(){
    return view('Site.Women.women');
});

Route::get('/competitions', function () {
    return view('Site.Competitions.competitions');
});

Route::get('/docs', function () {
    return view('Site.AboutUs.docs');
});

Route::get('/store', function(){
    return view('shop.index');
});

Route::get('/gallery', function(){
    return view('Site.Gallery.gallery');
});

Route::get('/about', function () {
    return view('Site.AboutUs.about');
});

Route::get('/procurement', function(){
    return view('Site.Procurement.index');
});

Route::get('/vacancies', function(){
    return view('Site.vacancies.index');
});




