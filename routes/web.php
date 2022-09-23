<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/nouvel-article', [BlogController::class, 'create'])->name('new-post');
Route::post('/blog/nouvel-article', [BlogController::class, 'store']);
Route::get('/blog/{post}/modifier', [BlogController::class, 'edit'])->name('post.edit');
Route::put('/blog/{post}/modifier', [BlogController::class, 'update']);
Route::delete('/blog/{post}', [BlogController::class, 'destroy'])->name('post.delete');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/inscription', [RegisterController:: class, 'index'])->name('register');
Route::post('/inscription', [RegisterController:: class, 'store']);

Route::get('/email/verify', [VerifyEmailController::class, 'index'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'update'])->name('verification.verify');
Route::get('email/verification-notification', [VerifyEmailController::class, 'store'])->name('verification.send');