<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\EchartController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kitapall', function () {
    return view('kitapall');
});
Route::get('/kitapall/page1', function () {
    return view('page1');
});
Route::get('/kitapall/page2', function () {
    return view('page2');
});
Route::get('/kitapall/page3', function () {
    return view('page3');
});
Route::get('/kitapall/page4', function () {
    return view('page4');
});
Route::get('/kitapall/{lang}', function ($lang) {
	App::setlocale($lang);
    return view('kitapall');
});
Route::get('/kitapall/page1/{lang}', function ($lang) {
	App::setlocale($lang);
    return view('page1');
});
Route::get('/kitapall/page2/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('page2');
});
Route::get('/kitapall/page3/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('page3');
});
Route::get('/kitapall/page4/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('page4');
});
Route::get('/uploadfile', 'App\Http\Controllers\UploadFileController@index');
Route::post('/uploadfile', 'App\Http\Controllers\UploadFileController@showUploadFile');
Route::get('/mail', 'App\Http\Controllers\MailController@send');

Route::get('/kitapall/echart', function () {
    return view('echart');
});
Route::get('/kitapall/barchart', function () {
    return view('barchart');
});
Route::get('kitapall/doughnutchart', function () {
    return view('doughnut');
});

