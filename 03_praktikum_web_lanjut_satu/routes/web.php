<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//No 1
Route::get('/', function () {
    return view('Home');
});

//No 2
Route::prefix('products')->group(function () {
    Route::get('/marbel_edu_games', function () {
        return view('products')
            ->with('name', 'Marbel Edu Games');
    });
    Route::get('/marbel_and_friends_kids_games', function () {
        return view('products')
            ->with('name', 'Marbel and Friends Kids Games');
    });
    Route::get('/riri_story_books', function () {
        return view('products')
            ->with('name', 'Riri Story Books');
    });
    Route::get('/kolak_kids_songs', function () {
        return view('products')
            ->with('name', 'Kolak Kids Songs');
    });
});

//No 3
Route::get('/news/{title?}', function ($title = null) {
    return view('news')
        ->with('title', $title);
});

//No 4
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        return view('program')
            ->with('name', 'Karir Polinema');
    });
    Route::get('/magang', function () {
        return view('program')
            ->with('name', 'Magang Polinema');
    });
    Route::get('/kunjungan_industri', function () {
        return view('program')
            ->with('name', 'Kunjungan Industri Polinema');
    });
});

//No 5
Route::get('/about_us', function () {
    return view('about_us');
});

//No 6
Route::resource('contact', ContactController::class)->only([
    'index', 'store'
]);
