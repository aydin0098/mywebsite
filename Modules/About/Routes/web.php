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

Route::prefix('admin')->group(function() {
    //Admin About
    Route::get('/about',[\Modules\About\Http\Controllers\AboutController::class,'index'])->name('admin.about.index');
    Route::post('about/update', [\Modules\About\Http\Controllers\AboutController::class, 'update'])->name('admin.about.update');
});
