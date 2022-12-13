<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TicketController;
use App\Models\Harga;
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
        "title" => "Wono Kitiran Blitar",
        "harga" => Harga::find(1)
    ]);
});

Route::get('/admin/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::post('/register', [LoginController::class, 'store']);

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
})->middleware('auth');

Route::get('/ticket', function () {
    return view('ticket',[
        "title" => "Ticket"
    ]);
});

Route::get('/admin/harga/{harga}', [HargaController::class, 'edit'])->middleware('auth');
Route::patch('/admin/harga/{harga}', [HargaController::class, 'update'])->middleware('auth');

Route::get('/admin/users', [Admin::class, 'index'])->middleware('auth');
Route::get('/admin/users/{user}/edit', [Admin::class, 'edit'])->middleware('auth');
Route::patch('/admin/users/{user}', [Admin::class, 'update'])->middleware('auth');
Route::delete('/admin/users/{user}', [Admin::class, 'destroy'])->middleware('auth');
Route::get('/admin/users/tambah', [Admin::class, 'create'])->middleware('auth');

Route::get('/admin/ticket', [TicketController::class, 'index'])->middleware('auth');
Route::post('/admin/ticket/tambah', [TicketController::class, 'store']);
Route::patch('/admin/ticket/{ticket}', [TicketController::class, 'update'])->middleware('auth');
Route::get('/admin/ticket/{ticket}/edit', [TicketController::class, 'edit'])->middleware('auth');
Route::delete('/admin/ticket/{ticket}', [TicketController::class, 'destroy'])->middleware('auth');

Route::get('/admin/message', [MessageController::class, 'index'])->middleware('auth');
Route::post('/admin/message/tambah', [MessageController::class, 'store']);
Route::delete('/admin/message/{message}', [MessageController::class, 'destroy'])->middleware('auth');
Route::get('/admin/view/message/{message}', [MessageController::class, 'show'])->middleware('auth');

Route::get('/admin/food', [FoodController::class, 'index'])->middleware('auth');
Route::post('/admin/food', [FoodController::class, 'store'])->middleware('auth');
Route::patch('/admin/food/{food}', [FoodController::class, 'update'])->middleware('auth');
Route::delete('/admin/food/{food}', [FoodController::class, 'destroy'])->middleware('auth');
Route::get('/food', [FoodController::class, 'pageview']);
Route::get('/admin/food/tambah', [FoodController::class, 'create'])->middleware('auth');
Route::get('/admin/food/{food}/edit', [FoodController::class, 'edit'])->middleware('auth');
Route::get('/admin/food/delete/{food}', [FoodController::class, 'destroy'])->middleware('auth');

Route::get('/admin/entertain', [EntertainmentController::class, 'index'])->middleware('auth');
Route::post('/admin/entertain', [EntertainmentController::class, 'store'])->middleware('auth');
Route::get('/admin/entertain/{entertainment}/edit', [EntertainmentController::class, 'edit'])->middleware('auth');
Route::patch('/admin/entertain/{entertainment}', [EntertainmentController::class, 'update'])->middleware('auth');
Route::delete('/admin/entertain/{entertainment}', [EntertainmentController::class, 'destroy'])->middleware('auth');
Route::get('/admin/entertain/tambah', [EntertainmentController::class, 'create'])->middleware('auth');
Route::get('/admin/entertain/delete/{entertainment}', [EntertainmentController::class, 'destroy'])->middleware('auth');
Route::get('/entertain', [EntertainmentController::class, 'pageview']);