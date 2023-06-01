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
Route::resource('/billetage', BilletageController::class);
Route::post('/add-billetage', [BilletageController::class, 'saveBilletage']);
Route::post('/add-incident', [ClotureIncidentsController::class, 'store']);






Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
