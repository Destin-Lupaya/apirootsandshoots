<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::resource('/points', PointsController::class);



Route::post('/Affiliation', 'App\Http\Controllers\AffiliationController@store');
Route::post('/Club', 'App\Http\Controllers\ClubController@store');
Route::post('/Membre', 'App\Http\Controllers\MembreController@store');
Route::post('/Pays', 'App\Http\Controllers\PaysController@store');
Route::post('/Territoire', 'App\Http\Controllers\TerritoireController@store');
Route::post('/Province', 'App\Http\Controllers\ProvinceController@store');
Route::post('/Ville', 'App\Http\Controllers\VilleController@store');

Route::get('/Affiliation', 'App\Http\Controllers\AffiliationController@index');
Route::get('/Club', 'App\Http\Controllers\ClubController@index');
Route::get('/Membre', 'App\Http\Controllers\MembreController@index');
Route::get('/Pays', 'App\Http\Controllers\PaysController@index');
Route::get('/Territoire', 'App\Http\Controllers\TerritoireController@index');
Route::get('/Province', 'App\Http\Controllers\ProvinceController@index');
Route::get('/Ville', 'App\Http\Controllers\VilleController@index');


Route::group(
    [
        // 'namespace' => 'App\Http\Controllers\UsersController',
        'middleware' =>'api'],function ($routes) {
            Route::post('/register', [UsersController::class, 'register']);
    });

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
