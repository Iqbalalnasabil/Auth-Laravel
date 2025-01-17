<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProtectedController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/protected', [ProtectedController::class, 'index'])->middleware('auth');
Route::get('/dashboard', [AdminController::class, 'index']);