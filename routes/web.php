<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
// use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\LoginController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/papad', function () {
    return view('papad');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('accounts', AccountController::class);

Route::resource('contacts', ContactController::class);

Route::resource('projects', ProjectController::class);

Route::resource('users', UserController::class);



//github
Route::get('/sign-in/github', [LoginController::class, 'github']);
Route::get('/sign-in/github/redirect', [LoginController::class, 'githubRedirect']);

//google
Route::get('/sign-in/google', [LoginController::class, 'google']);
Route::get('/google/callback', [LoginController::class, 'googleRedirect']);