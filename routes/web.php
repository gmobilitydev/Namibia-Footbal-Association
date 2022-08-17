<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\WebsiteController;
use App\Http\Controllers\Shop\ShopController;
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

//---------------------------------------- News Center Routes ----------------------------------------

Route::get('/news',[WebsiteController::class, 'newsCenter']);
Route::get('/news/{post}',[WebsiteController::class, 'showPost']);


//---------------------------------------- Men's/Brave Warriors Routes ----------------------------------------
Route::get('/warriors', [WebsiteController::class, 'warriorsNews']);
Route::get('/warriors/{post}',[WebsiteController::class, 'showWarriorsPost']);

Route::get('/warriors-fixtures', function(){
    return view('Site.Men.fixtures-results');
});

// Route::get('/warriors-squads', [WebsiteController::class, 'mensTeams']);
Route::get('/warriors-squads', function(){
    return view('Site.Men.squads');
});


Route::get('/warriors-squads/{team}', [WebsiteController::class, 'showMensTeam']);

// ------------------------------------ End of Men's/Brave Warriors Routes -------------------------------------



//------------------------------------Competitions Routes--------------------------------------------------
Route::get('/competitions', [WebsiteController::class, 'competitions']);

//---------------------------------------- Women's/Brave Warriors Routes ----------------------------------------

Route::get('/gladiators', [WebsiteController::class, 'gladiatorsNews']);
Route::get('/gladiators/{post}',[WebsiteController::class, 'showGladiatorsPost']);

Route::get('/gladiators-fixtures', function(){
    return view('Site.Men.fixtures-results');
});

Route::get('/gladiators-squads', [WebsiteController::class, 'womensTeams']);

Route::get('/gladiators-team', [WebsiteController::class, 'showWomensTeams']);
// ------------------------------------ End of Woomen's/Brave Warriors Routes -------------------------------------


Route::get('/competitions', function () {
    return view('Site.Competitions.competitions');
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

Route::get('/vacancies',[WebsiteController::class, 'vacancies']);
Route::get('/docs',[WebsiteController::class, 'documents']);


Route::get('/org', function(){
    return view('Site.AboutUs.org');
});

/**
 *
 * Shop Routes
 */

Route::get('/store', [ShopController::class,'index']);
