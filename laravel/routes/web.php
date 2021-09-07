<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "HomeController@home")->name("to-home");

Route::get('/characters', "HomeController@characters")->name("to-characters");

Route::get('/comics', function () {

    $comics = config("comics");

    $data = ["comics" => $comics];

    return view('comics', $data);
})->name("to-comics");

Route::get('/movies', "HomeController@movies")->name("to-movies");

Route::get('/tv', "HomeController@tv")->name("to-tv");

Route::get('/games', "HomeController@games")->name("to-games");

Route::get('/collectibles', "HomeController@collectibles")->name("to-collectibles");

Route::get('/videos', "HomeController@videos")->name("to-videos");

Route::get('/fans', "HomeController@fans")->name("to-fans");

Route::get('/news', "HomeController@news")->name("to-news");

Route::get('/shop', "HomeController@shop")->name("to-shop");

Route::get('/detail/{id}', function ($id) {
    $comics = config("comics");

    $data = ["comic" => $comics[$id]];

    return view('detail', $data);
})->name("to-detail");