<?php

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

Route::get('/command',function(){
    \Illuminate\Support\Facades\Artisan::call('storage:link');
});
Route::get('/', [\App\Http\Controllers\UserController::class,"indexLogin"])->name('login.index');
Route::get('/login', [\App\Http\Controllers\UserController::class,"indexLogin"])->name('login.index');
Route::post('/login', [\App\Http\Controllers\UserController::class,'storeLoginAdmin'])->name('login.store');


Route::middleware([\App\Http\Middleware\checkLogin::class])->prefix('/')->group(function () {
    Route::post('/', [\App\Http\Controllers\UserController::class,'logOutAdmin'])->name('logout.store');

    Route::get('/hosobenhnhan', [\App\Http\Controllers\HosobenhnhanController::class,'index_hosobenhnhan'])->name('hosobenhnhan');
    Route::post('/hosobenhnhan', [\App\Http\Controllers\HosobenhnhanController::class,'store_hosobenhnhan'])->name('hosobenhnhan.store');
    Route::get('/list_hosobenhnhan', [\App\Http\Controllers\HosobenhnhanController::class,'list_hosobenhnhan'])->name('hosobenhnhan.list');

    Route::get('/detail_hosobenhnhan/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'edit_hosobenhnhan'])->name('hosobenhnhan.detail');
    Route::post('/detail_hosobenhnhan/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'edit_hanhchinh'])->name('edit.hanhchinh');
    Route::get('/detail_khamtronggmieng/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'edit_khamtrongmieng'])->name('edit.khamtrongmieng');
    Route::post('/detail_khamtronggmieng/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'store_khamtrongmieng'])->name('store.khamtrongmieng');

    Route::get('/detail_khamngoaimat/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'edit_khamngoaimat'])->name('edit.khamngoaimat');

    Route::post('/detail_khamngoaimat/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'store_khamngoaimat'])->name('store.khamngoaimat');

});
