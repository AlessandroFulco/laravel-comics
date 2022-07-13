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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/characters', function () {
    return view('home');
})->name('characters');

Route::get('/', function () {
    return view('home');
})->name('home');

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



Route::get('/comic/{id}', function ($id) {
    $comics = null;

    foreach (config('comics') as $value) {
        if($value['id'] == $id) {
            $comics = $value;
            break;
        }
    }

    if($comics) {
        return view('comic', [
            'comic' => $comics
        ]);
    } else {
        abort(404);
    }
})->name('comic');


