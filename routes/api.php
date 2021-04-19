<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookloverController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//List articles
Route::get('booklovers', 'App\Http\Controllers\BookloverController@index');
//list single article
Route::get('booklover/{id}', 'App\Http\Controllers\BookloverController@show');
//create new article
Route::post('booklover', 'App\Http\Controllers\BookloverController@store');
//update articles
Route::put('booklover', 'App\Http\Controllers\BookloverController@store');
//delete article
Route::delete('booklover/{id}', 'App\Http\Controllers\BookloverController@destroy');