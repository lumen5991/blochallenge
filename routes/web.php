<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Passport\Http\Controllers\AccessTokenController;
use App\Http\Controllers\UserController;

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

// Passport routes
Route::group(['prefix' => 'oauth'], function () {
    Route::post('/token', [AccessTokenController::class, 'issueToken']);
});

// Routes pour l'authentification
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);
Route::get('/', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);


/* Route::view('/register', 'users.register')->name('register');
Route::view('/login', 'users.login')->name('login'); */

Route::view('listuser', 'admin.listUser')->name('listUser');
