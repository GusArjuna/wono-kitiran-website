<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TicketController;
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
    return view('dashboard',[
        "title" => "Wono Kitiran Blitar"
    ]);
});

Route::get('/admin/login', function () {
    return view('adminlogin');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy',[
        "title" => "Privacy Policy"
    ]);
});

Route::get('/terms-conditions', function () {
    return view('terms-conditions',[
        "title" => "Terms Conditions"
    ]);
});

Route::get('/admin/dashboard', function () {
    return view('admindashboard');
});

Route::get('/ticket', function () {
    return view('ticket',[
        "title" => "Ticket"
    ]);
});

Route::get('/admin/users', [Admin::class, 'index']);
Route::get('/admin/users/tambah', [Admin::class, 'create']);
Route::get('/admin/ticket', [TicketController::class, 'index']);
Route::get('/admin/message', [MessageController::class, 'index']);
Route::get('/admin/food', [FoodController::class, 'index']);
Route::get('/food', [FoodController::class, 'pageview']);
Route::get('/admin/food/tambah', [FoodController::class, 'create']);
Route::get('/admin/entertain', [EntertainmentController::class, 'index']);
Route::get('/admin/entertain/tambah', [EntertainmentController::class, 'create']);
Route::get('/entertain', [EntertainmentController::class, 'pageview']);