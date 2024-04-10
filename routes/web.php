<?php

use App\Http\Controllers\AuthenthicationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'IndexPage'])->name('IndexPage');

Route::get('/cart', [PageController::class, 'CartPage'])->name('CartPage');

Route::get('/login', [PageController::class, 'LoginPage'])->name('LoginPage');
Route::get('/register', [PageController::class, 'RegisterPage'])->name('RegisterPage');

Route::post('/register', [AuthenthicationController::class, 'Register'])->name('Register');
Route::post('/login', [AuthenthicationController::class, 'Login'])->name('Login');

Route::post('/logout', [AuthenthicationController::class, 'Logout'])->name('Logout');

Route::get('/about-us', [PageController::class, 'AboutUsPage'])->name('AboutUsPage');

Route::get('/profile', [PageController::class, 'ProfilePage'])->name('ProfilePage');

Route::get('/change-password', [PageController::class, 'ChangePasswordPage'])->name('ChangePasswordPage');
Route::patch('/change-password', [ProfileController::class, 'ChangePassword'])->name('ChangePassword');

Route::patch('/profile/update-profile', [ProfileController::class, 'UpdateProfile'])->name('UpdateProfile');