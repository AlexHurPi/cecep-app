<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EstudianteController;
use App\Http\Controllers\Api\CarreraController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/estudiantes',[EstudianteController::class, 'index'])->name('estudiantes');

Route::post('/carreras',[CarreraController::class, 'store'])->name('carreras.store');
Route::get('/carreras',[CarreraController::class, 'index'])->name('carreras');
Route::get('/carreras/{carrera}',[CarreraController::class, 'show'])->name('carreras.show');