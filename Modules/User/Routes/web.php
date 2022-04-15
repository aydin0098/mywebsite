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
    Route::resource('users', \Modules\User\Http\Controllers\UsersController::class);
    Route::get('/users/{user}/permissions',[\Modules\User\Http\Controllers\UsersController::class,'permissions'])->name('admin.users.permission');
    Route::post('/users/{user}/permissions',[\Modules\User\Http\Controllers\UsersController::class,'permissionsPost'])->name('admin.users.permission.post');
});
