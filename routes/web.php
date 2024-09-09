<?php

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

Route::get('/', function () {

    $title = 'Welcome to our page';

    $links = ['Home', 'About us', 'Contact us', 'Privacy'];

    return view('home', compact('title', 'links'));
});


Route::get('/About-us', function () {
    return view('about');
});


Route::get('/Contact-us', function () {
    return view('contact');
});

Route::get('/Privacy', function () {
    return view('privacy');
});

