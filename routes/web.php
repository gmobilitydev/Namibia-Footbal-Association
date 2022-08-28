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

Route::get('/warriors-fixtures', [WebsiteController::class, 'fixtures']);

// Route::get('/warriors-squads', [WebsiteController::class, 'mensTeams']);
Route::get('/warriors-squads', function(){
    return view('Site.Men.squads');
});


Route::get('/warriors-squads/{team}', [WebsiteController::class, 'showMensTeam']);

// ------------------------------------ End of Men's/Brave Warriors Routes -------------------------------------



//------------------------------------Competitions Routes--------------------------------------------------
Route::get('/competitions', [WebsiteController::class, 'competitions']);
Route::get('competitions/{comp}',[WebsiteController::class,'showCompetition']);
Route::get('competitions/{comp}/matches',[WebsiteController::class, 'competitionMatches']);
Route::get('competitions/{comp}/standings',[WebsiteController::class, 'competitionStandings']);
Route::get('competitions/{comp}/teams',[WebsiteController::class, 'competitionTeams']);



//---------------------------------------- Women's/Brave Warriors Routes ----------------------------------------

Route::get('/gladiators', [WebsiteController::class, 'gladiatorsNews']);
Route::get('/gladiators/{post}',[WebsiteController::class, 'showGladiatorsPost']);

Route::get('/gladiators-fixtures', function(){
    return view('Site.Women.fixtures-results');
});
Route::get('/gladiators-squads', function(){
    return view('Site.Women.squads');
});
// Route::get('/gladiators-squads', [WebsiteController::class, 'womensTeams']);

Route::get('/gladiators-team', [WebsiteController::class, 'showWomensTeams']);
// ------------------------------------ End of Woomen's/Brave Warriors Routes -------------------------------------






Route::get('/gallery', [WebsiteController::class, 'gallery']);



Route::get('/procurement', function(){
    return view('Site.Procurement.index');
});

Route::get('/vacancies',[WebsiteController::class, 'vacancies']);
Route::get('/docs',[WebsiteController::class, 'documents']);




/**
 *
 * Shop Routes
 */

Route::get('/store', [ShopController::class,'maintenance']);

/**
 *
 * About Us Routes
 */
Route::get('/about',[WebsiteController::class, 'aboutUs']);
Route::get('/org', [WebsiteController::class,'organisation']);
