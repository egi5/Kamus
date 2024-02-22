<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//login
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('actionLogin', [LoginController::class,'actionLogin'])->name('actionLogin');

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

// Rute untuk logout
// Route::post('/logout', 'LoginController@logout')->name('logout');

//home
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionLogout'])->name('actionLogout')->middleware('auth');

//kata
Route::get('/word', [KataController::class, 'index'])->name('kata')->middleware('auth');
Route::post('/makna', [KataController::class, 'getMakna'])->name('maknaKata')->middleware('auth');

//history
Route::get('/history', [KataController::class, 'histoy'])->name('history')->middleware('auth');