<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [IndexController::class, 'index']);

Route::get('/mail')

Route::post('/contact-form', [ContactController::class, 'contactForm']);

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/cv', function () {
    return view('cv');
});
Route::get('/cv-en', function () {
    return view('cv-en');
});
Route::get('/blog', [BlogController::class, 'index']);

Route::resource('/admin', AdminController::class);
Route::resource('/post', PostController::class);
Route::resource('/projects', ProjectController::class);

Auth::routes();
