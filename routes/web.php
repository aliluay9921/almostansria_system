<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');


Auth::routes();



Route::get('/owner', [App\Http\Controllers\HomeController::class, 'index'])->name('owner');

route::get('/owner', [App\Http\Controllers\ownerController::class, 'index'])->name('owner');
route::post('/owner', [App\Http\Controllers\ownerController::class, 'store'])->name('adduser');


route::post('maerial', [App\Http\Controllers\materialController::class, 'store'])->name('addMaterial');

route::post('lecture', [App\Http\Controllers\doctorController::class, 'store'])->name('add.lecture');

Route::get('/program', [App\Http\Controllers\programController::class, 'index'])->name('program');
route::post('/program', [App\Http\Controllers\programController::class, 'store'])->name('add.program');
