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
    Route::get('/',[\Modules\Dashboard\Http\Controllers\DashboardController::class,'index'])->name('admin.index');
    Route::get('/profile/edit',[\Modules\Dashboard\Http\Controllers\DashboardController::class,'profileEdit'])->name('admin.profile.edit');
    Route::post('/profile/{user}/update',[\Modules\Dashboard\Http\Controllers\DashboardController::class,'profileUpdate'])->name('admin.profile.update');
});
