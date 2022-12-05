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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', [\App\Http\Controllers\MainController::class,'create']);
Route::post('/create',[\App\Http\Controllers\MainController::class,'store']);
Route::get('/list', [\App\Http\Controllers\MainController::class,'list']);
Route::get('/edit/{id}', [\App\Http\Controllers\MainController::class,'edit']);
Route::post('edit', [\App\Http\Controllers\MainController::class,'update']);
Route::get('/delete/{id}', [\App\Http\Controllers\MainController::class,'delete']);


