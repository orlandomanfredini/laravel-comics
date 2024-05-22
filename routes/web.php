<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function(){
    return view('mainHome');
})->name('mainPage');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/comics', function(){
    $data = config('comics');
    return view('comics', compact('data'));
})->name('comics');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/privacy', function(){
    return view('privacy');
})->name('privacy');
