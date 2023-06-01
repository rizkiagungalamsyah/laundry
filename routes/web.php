<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PengeluaranController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', fn() => redirect()->route('login'));

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {

    Route::get('layanan/data', [LayananController::class, 'data']);
    Route::resource('layanan', LayananController::class);

    Route::get('customer/data', [CustomerController::class, 'data']);
    Route::resource('customer', CustomerController::class);

    Route::get('pengeluaran/data', [PengeluaranController::class, 'data']);
    Route::resource('pengeluaran', PengeluaranController::class);

});
