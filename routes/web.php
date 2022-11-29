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
    return view('dashboard');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});

Route::get('/entertain', function () {
    return view('entertain');
});

Route::get('/food', function () {
    return view('food');
});

Route::get('/admindashboard', function () {
    return view('admindashboard');
});

Route::get('/blank', function () {
    return view('blank');
});
