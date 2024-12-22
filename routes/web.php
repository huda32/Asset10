<?php

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

Route::get('/', function () {
    return view('welcome');
});
// Route::delete('/computer/{id}', [\App\Http\Controllers\ComputerController::class,'destroy']);
// Mesin Squad
Route::get('/mesin',[\App\Http\Controllers\MesinController::class,'index']);
Route::get('/mesin/create',[\App\Http\Controllers\MesinController::class,'create']);
Route::post('/mesin',[\App\Http\Controllers\MesinController::class,'store']);
Route::get('/mesin/{id}',[\App\Http\Controllers\MesinController::class,'show']);
Route::delete('/mesin/{id}', [\App\Http\Controllers\MesinController::class,'destroy']);


// Chard Squad
Route::get('/charts',[\App\Http\Controllers\ChartController::class,'index']);
