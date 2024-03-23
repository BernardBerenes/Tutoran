<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [PageController::class, 'LoginPage'])->name('LoginPage');
Route::get('/register', [PageController::class, 'RegisterPage'])->name('RegisterPage');