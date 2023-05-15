<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\SessionController;
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

//ini yang utama

Route::get('/', [DataController::class,'data'])->middleware('isLogin');

Route::resource('dashboard', DataController::class)->middleware('isLogin');

Route::resource('data', DataController::class)->middleware('isLogin');

Route::get('/data', [DataController::class,'data'])->middleware('isLogin');

Route::get('/cetak', [DataController::class,'cetak']);

Route::get('/data/create', [DataController::class,'create'])->middleware('isLogin');


//ini untuk petugas

Route::post('/petugas/request_process', [DataController::class,'requeststore'])->middleware('isLogin');

Route::get('/petugas/dashboard', [DataController::class,'index_petugas'])->middleware('isLogin');

Route::get('/petugas/data', [DataController::class,'data_petugas'])->middleware('isLogin');

Route::get('/petugas/request', [DataController::class,'request_petugas'])->middleware('isLogin');


//ini untuk admin

Route::resource('data_admin', DataController::class)->middleware('isLogin');

Route::resource('confirm_admin', ConfirmController::class)->middleware('isLogin');

Route::post('/admin/data/create_process', [DataController::class,'store'])->middleware('isLogin');

Route::get('/admin/dashboard', [DataController::class,'index_admin'])->middleware('isLogin');

Route::get('/admin/data', [DataController::class,'data_admin'])->middleware('isLogin');

Route::get('/admin/cetak', [DataController::class,'cetak']);

Route::get('/admin/data/create', [DataController::class,'create'])->middleware('isLogin');

Route::get('/admin/data/konfirmasi', [DataController::class,'konfirmasi_admin'])->middleware('isLogin');


// ini bagian luar

Route::get('/sesi', [SessionController::class,'index'])->middleware('isGuest');

Route::get('/sesi/register', [SessionController::class,'register'])->middleware('isGuest');

Route::post('/sesi/create', [SessionController::class,'create'])->middleware('isGuest');

Route::post('/sesi/login', [SessionController::class,'login'])->middleware('isGuest');

Route::get('/sesi/logout', [SessionController::class,'logout']);
