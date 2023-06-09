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
})->name('characters');

Route::get('/info-details/{slug}', function ($slug) {

    $cards = config('comics');
    $card_array = array_filter($cards, fn($item) => $item['slug'] === $slug);

    // redirect se slug errato
    if(empty($card_array)) return to_route('comics');

    $card = $card_array[array_key_first($card_array)];
    return view('info-details', compact('card'));
})->name('info-details');

Route::get('/comics', function () {
    return view('home');
})->name('comics');

Route::get('/movies', function () {
    return view('home');
})->name('movies');

Route::get('/tv', function () {
    return view('home');
})->name('tv');

Route::get('/games', function () {
    return view('home');
})->name('games');

Route::get('/collectibles', function () {
    return view('home');
})->name('collectibles');

Route::get('/videos', function () {
    return view('home');
})->name('videos');

Route::get('/fans', function () {
    return view('home');
})->name('fans');

Route::get('/news', function () {
    return view('home');
})->name('news');

Route::get('/shop', function () {
    return view('home');
})->name('shop');
