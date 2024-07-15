<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Models\User;
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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/get-in-touch', [PageController::class, 'getintouch'])->name('getintouch');
Route::get('/our-team', [PageController::class, 'ourteam'])->name('ourteam');
Route::get('/qr', [PageController::class, 'qr'])->name('qr');


Route::group(['middleware' => 'auth', 'prefix' => '/dashboard'], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
});

// Login Routes...
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Logout Routes...
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout.get');


// Registration Routes...
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
