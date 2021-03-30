<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
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
    return redirect('barang');
});
Route::get('barang',[BarangController::class, 'index']);
Route::get('create',[BarangController::class,'create']);
Route::get('edit/{id}',[BarangController::class,'edit']);
Route::get('show/{id}',[BarangController::class,'show']);
Route::get('delete/{id}',[BarangController::class,'delete']);

Route::post('tambah',[BarangController::class, 'tambah']);
Route::post('update/{id}',[BarangController::class, 'update']);
Route::post('cari',[BarangController::class, 'cari']);