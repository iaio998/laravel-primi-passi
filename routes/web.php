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
    $data = [
        "first" => "Hello",
        "second" => "Home Page",
    ];
    return view('home', $data);
})->name('home');

Route::get('/pages.about', function () {
    $data = [
        "first" => "Hello",
        "second" => "About Page",
    ];
    return view('pages.about', $data);
})->name('about');

Route::get('/pages.another', function () {
    $data = [
        "first" => "Hello",
        "second" => "Another Page",
    ];
    return view('pages.another', $data);
})->name('another');
