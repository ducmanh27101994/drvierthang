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
Route::get('/register', [\App\Http\Controllers\UserController::class,'register'])->name('index.register');
Route::post('/register', [\App\Http\Controllers\UserController::class,'store_register'])->name('store.register');


Route::middleware([\App\Http\Middleware\checkLogin::class])->prefix('/')->group(function () {
    Route::post('/', [\App\Http\Controllers\UserController::class,'logOutAdmin'])->name('logout.store');
    Route::get('/quanlytaikhoan', [\App\Http\Controllers\UserController::class,'list_user'])->name('index.user');
    Route::post('/quanlytaikhoan/{id}', [\App\Http\Controllers\UserController::class,'updateStatus_user'])->name('update.user');

    Route::get('/hosobenhnhan', [\App\Http\Controllers\HosobenhnhanController::class,'index_hosobenhnhan'])->name('hosobenhnhan');
    Route::post('/hosobenhnhan', [\App\Http\Controllers\HosobenhnhanController::class,'store_hosobenhnhan'])->name('hosobenhnhan.store');
    Route::get('/list_hosobenhnhan', [\App\Http\Controllers\HosobenhnhanController::class,'list_hosobenhnhan'])->name('hosobenhnhan.list');

    Route::get('/detail_hosobenhnhan/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'edit_hosobenhnhan'])->name('hosobenhnhan.detail');
    Route::post('/detail_hosobenhnhan/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'edit_hanhchinh'])->name('edit.hanhchinh');
    Route::get('/detail_khamtronggmieng/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'edit_khamtrongmieng'])->name('edit.khamtrongmieng');
    Route::post('/detail_khamtronggmieng/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'store_khamtrongmieng'])->name('store.khamtrongmieng');

    Route::get('/detail_khamngoaimat/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'edit_khamngoaimat'])->name('edit.khamngoaimat');

    Route::post('/detail_khamngoaimat/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'store_khamngoaimat'])->name('store.khamngoaimat');

    Route::get('/tuvantaichinh/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'edit_tuvantaichinh'])->name('edit.tuvantaichinh');
    Route::post('/tuvantaichinh/', [\App\Http\Controllers\HosobenhnhanController::class,'store_tuvantaichinh'])->name('store.tuvantaichinh');
    Route::post('/tuvantaichinh/{id}/', [\App\Http\Controllers\HosobenhnhanController::class,'edit_tuvantaichinh_store'])->name('update.tuvantaichinh');
    Route::get('/index_thuvientuvan/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'index_thuvientuvan'])->name('index.thuvientuvan');
    Route::get('/index_image/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'index_image'])->name('index.image');
    Route::post('/index_image', [\App\Http\Controllers\HosobenhnhanController::class,'store_image'])->name('store.image');
    Route::get('/quatrinhdieutri/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'index_quatrinhdieutri'])->name('index.quatrinhdieutri');
    Route::post('/quatrinhdieutri', [\App\Http\Controllers\HosobenhnhanController::class,'store_quatrinhdieutri'])->name('store.quatrinhdieutri');
    Route::get('/kehoachdieutri/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'index_kehoachdieutri'])->name('index.kehoachdieutri');
    Route::post('/kehoachdieutri/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'store_kehoachdieutri'])->name('store.kehoachdieutri');

    Route::get('/phantichphim/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'index_phantichphim'])->name('index.phantichphim');
    Route::post('/phantichphim/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'store_phantichphim'])->name('store.phantichphim');
    Route::get('/phantichmauham/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'index_phantichmauham'])->name('index.phantichmauham');
    Route::post('/phantichmauham/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'store_phantichmauham'])->name('store.phantichmauham');
    Route::get('/vto/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'index_vto'])->name('index.vto');
    Route::post('/vto/{id}', [\App\Http\Controllers\HosobenhnhanController::class,'store_vto'])->name('store.vto');

    Route::get('/search_list_hosobenhnhan', [\App\Http\Controllers\HosobenhnhanController::class,'search_hosobenhnhan'])->name('search.hosobenhnhan');
    Route::get('/hosobenhnhanrang', [\App\Http\Controllers\HosobenhnhanController::class,'list_hosobenhnhanchinhnha'])->name('index.hosobenhnhanrang');



});
