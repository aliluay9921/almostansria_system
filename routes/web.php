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



Auth::routes();





route::get('/', [App\Http\Controllers\baseController::class, 'index'])->name('home');
route::get('/', [App\Http\Controllers\baseController::class, 'get'])->name('home');


Route::get('/owner', [App\Http\Controllers\HomeController::class, 'index'])->name('owner');

route::get('/owner', [App\Http\Controllers\ownerController::class, 'index'])->name('owner');
route::post('/owner', [App\Http\Controllers\ownerController::class, 'store'])->name('adduser');
route::put('/owner', [App\Http\Controllers\ownerController::class, 'update'])->name('updateUser');
route::delete('/deleteUser', [App\Http\Controllers\ownerController::class, 'delete'])->name('delete_user');



route::get('matiral\{stage_id}\{branch_id}', [App\Http\Controllers\materialController::class, 'index'])->name('getmatiral');
route::get('matiralAdmin\{stage_id}\{branch_id}', [App\Http\Controllers\materialController::class, 'allMaterialAdmin'])->name('getmatiralAdmin');

route::post('maerial', [App\Http\Controllers\materialController::class, 'store'])->name('addMaterial');

route::get('lecture/{material_id}', [App\Http\Controllers\doctorController::class, 'index'])->name('get.lecture');
route::get('lectureAdmin/{material_id}', [App\Http\Controllers\doctorController::class, 'getlectureAdmin'])->name('get.lectureAdmin');
route::post('lecture', [App\Http\Controllers\doctorController::class, 'store'])->name('add.lecture');
route::delete('/lecture', [App\Http\Controllers\doctorController::class, 'delete'])->name('deletelecture');

route::post('reference', [App\Http\Controllers\doctorController::class, 'create'])->name('add.reference');


Route::get('/program', [App\Http\Controllers\programController::class, 'index'])->name('program');
Route::get('/programAdmin', [App\Http\Controllers\programController::class, 'programAdmin'])->name('allProgramAdmin');
route::post('/program', [App\Http\Controllers\programController::class, 'store'])->name('add.program');
route::delete('/program', [App\Http\Controllers\programController::class, 'delete'])->name('delete');



Route::get('/download/{code}', [App\Http\Controllers\doctorController::class, 'download'])->name('download');