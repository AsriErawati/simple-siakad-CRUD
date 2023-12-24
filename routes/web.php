<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tbl_mahasiswaController;
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

Route::get('/',[ Tbl_mahasiswaController::class, 'datamhs']);

Route::get('/input', [ Tbl_mahasiswaController::class, 'input']);

Route::get('/about', function () {
    return view('about');
});


Route::get('/data', [Tbl_mahasiswaController::class, 'datamhs']);
Route::get('/data/input', [Tbl_mahasiswaController::class, 'input']);
Route::post('/data/proses', [Tbl_mahasiswaController::class, 'proses']);
Route::get('/data/edit/{nrp}', [Tbl_mahasiswaController::class, 'edit']);
Route::post('/data/update', [Tbl_mahasiswaController::class, 'update']);
Route::get('/data/hapus/{nrp}', [Tbl_mahasiswaController::class, 'hapus']);