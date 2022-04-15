<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home.index');
//All Blog
Route::get('/blog',[\App\Http\Controllers\HomeController::class,'blog'])->name('blog.index');
//Single Blog
Route::get('/blog/{article}',[\App\Http\Controllers\HomeController::class,'singleBlog'])->name('blog.single');
//Add Comment
Route::post('/contact',[\App\Http\Controllers\HomeController::class,'addComment'])->name('contact.post');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
