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

Route::get('/', [App\Http\Controllers\PaginaController::class,'index']);
Route::get('/campeones', [App\Http\Controllers\PaginaController::class,'campeones']);
Route::get('/historias', [App\Http\Controllers\PaginaController::class,'historias']);
Route::get('/notas', [App\Http\Controllers\PaginaController::class,'notas']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
