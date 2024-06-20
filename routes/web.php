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
    return view('welcome');
});

Route::get('/card/{card_id}',[\App\Http\Controllers\Client\CardController::class , 'show'])->name('show-card');


//Admin Panel
Route::resource('/admin/card', \App\Http\Controllers\Admin\CardController::class);
