<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotmanController;
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
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/indikator', [App\Http\Controllers\IndkatorController::class, 'index'])->name('indikator');
Route::get('/katakanpeta', [App\Http\Controllers\KatakanpetaController::class, 'index']);
Route::post('/katakanpeta/store', [App\Http\Controllers\KatakanpetaController::class, 'store']);
Route::get('/katakanpeta/hapus/{id}', [App\Http\Controllers\KatakanpetaController::class, 'hapus'])->name('hapus');
Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);
Route::get('/indikator', [App\Http\Controllers\IndkatorController::class, 'count'])->name('count');