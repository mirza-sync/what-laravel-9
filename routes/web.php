<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

// Route:view is to return static view (blade.php file)
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
