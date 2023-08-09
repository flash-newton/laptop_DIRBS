<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return redirect('/login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/devices', [App\Http\Controllers\DeviceController::class, 'index']);
Route::get('/device-detail/{id}', [App\Http\Controllers\DeviceController::class, 'getDetails']);


Route::middleware(['can:isSuperAdmin'])->group(function () {
    Route::get('/users', [App\Http\Controllers\Users::class, 'index']);
});