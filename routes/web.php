<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');
Route::get('/blog/nouvel-article', [BlogController::class, 'create'])->name('new-post')->middleware(['auth', 'verified']);
Route::post('/blog/nouvel-article', [BlogController::class, 'store']);
Route::get('/blog/{post}/modifier', [BlogController::class, 'edit'])->name('post.edit')->middleware('verified');
Route::put('/blog/{post}/modifier', [BlogController::class, 'update']);
Route::delete('/blog/{post}', [BlogController::class, 'destroy'])->name('post.delete')->middleware('verified');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/inscription', [RegisterController:: class, 'index'])->name('register')->middleware('guest');
Route::post('/inscription', [RegisterController:: class, 'store']);

Route::get('/email/verify', [VerifyEmailController::class, 'index'])->name('verification.notice')->middleware('auth');
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'update'])->name('verification.verify');
Route::get('email/verification-notification', [VerifyEmailController::class, 'store'])->name('verification.send')->middleware('throttle:2,1');

Route::get('/mot-de-passe-oublie', [ForgotPasswordController::class, 'index'])->name('password.request');
Route::post('/mot-de-passe-oublie', [ForgotPasswordController::class, 'store'])->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'index'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'store'])->name('password.update');

Route::get('/profil', function () {
    return Auth::user();
});