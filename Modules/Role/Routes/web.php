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
    Route::resource('roles', \Modules\Role\Http\Controllers\RoleController::class);
    Route::get('/roles/{role}/permissions',[\Modules\Role\Http\Controllers\RoleController::class,'permissions'])->name('admin.role.permission');
    Route::post('/roles/{role}/permissions',[\Modules\Role\Http\Controllers\RoleController::class,'permissionsPost'])->name('admin.role.permission.post');
});
