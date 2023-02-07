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
});

Route::get('/html', function () {
    return view('html');
});

Route::get('/css', function () {
    return view('css');
});

Route::get('/javascript', function () {
    return view('javascript');
});

Route::get('/vue', function () {
    return view('vue');
});

Route::get('/php', function () {
    return view('php');
});

Route::get('/laravel', function () {
    return view('laravel');
});