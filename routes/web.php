<?php

use App\Models\Karyawan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Karyawancontroller;


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


// View
Route::get('/', [KaryawanController::class, 'index'])->name('viewKaryawan');



// Route::get('/',[KaryawanController::class, 'getHomePage'])->name('homePage');

// Karyawan
Route::get('/tambah',[KaryawanController::class, 'getTambahKaryawan'])->name('getKaryawanPage');
Route::post('/tambah',[KaryawanController::class, 'createKaryawan'])->name('createKaryawan');

Route::get('/update/{id}',[KaryawanController::class, 'getUpdateKaryawan'])->name('getUpdateKaryawan');
Route::patch('/update/{id}',[KaryawanController::class,'updateKaryawan'])->name('updateKaryawan');

Route::delete('/manage/delete/{id}',[KaryawanController::class, 'deleteKaryawan'])->name('deleteKaryawan');

