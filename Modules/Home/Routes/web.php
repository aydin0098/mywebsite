<?php

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

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin')->group(function() {
    Route::get('/home',[\Modules\Home\Http\Controllers\HomeController::class,'index'])->name('admin.home.index');
    Route::post('home/update', [\Modules\Home\Http\Controllers\HomeController::class, 'update'])->name('admin.home.update');
//Admin Typing
    Route::resource('typings', \Modules\Home\Http\Controllers\TypingController::class);
});
