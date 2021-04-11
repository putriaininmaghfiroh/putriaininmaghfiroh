<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\PagesController;
use App\Http\controllers\PegawaiController;
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

/*Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
*/

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/create', [PegawaiController::class, 'create']);
Route::post('/pegawai', [PegawaiController::class, 'store']);
Route::delete('/{pegawai}', [PegawaiController::class, 'destroy']);
Route::get('/{pegawai}/edit', [PegawaiController::class, 'edit']);
Route::patch('/pegawai/{pegawai}', [PegawaiController::class, 'update']);
Route::get('/hubungi', [PagesController::class, 'hubungi']);
