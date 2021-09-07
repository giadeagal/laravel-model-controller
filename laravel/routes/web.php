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

Route::get('/', function () {
    return view('home');
})->name("to-home");

Route::get('/characters', function () {
    return view('characters');
})->name("to-characters");

Route::get('/comics', function () {

    $comics = config("comics");

    $data = ["comics" => $comics];

    return view('comics', $data);
})->name("to-comics");

Route::get('/movies', function () {
    return view('movies');
})->name("to-movies");

Route::get('/tv', function () {
    return view('tv');
})->name("to-tv");

Route::get('/games', function () {
    return view('games');
})->name("to-games");

Route::get('/collectibles', function () {
    return view('collectibles');
})->name("to-collectibles");

Route::get('/videos', function () {
    return view('videos');
})->name("to-videos");

Route::get('/fans', function () {
    return view('fans');
})->name("to-fans");

Route::get('/news', function () {
    return view('news');
})->name("to-news");

Route::get('/shop', function () {
    return view('shop');
})->name("to-shop");
