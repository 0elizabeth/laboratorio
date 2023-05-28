<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\AnalisiController;
use App\Http\Controllers\ExameneController;
use App\Http\Controllers\SolicitudeController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::resource('pacientes', PacienteController::class);
Route::resource('analisis', AnalisiController::class);
Route::resource('examenes', ExameneController::class);
Route::resource('solicitudes', SolicitudeController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
