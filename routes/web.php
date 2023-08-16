<?php

use App\Http\Controllers\UserController;
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

Route::resource('administrador/users', UserController::class)
->names('administrador.users');

Route::resource('laboratorio/pacientes', PacienteController::class)
->names('laboratorio.pacientes');
Route::resource('laboratorio/analisis', AnalisiController::class)
->names('laboratorio.analisis');
Route::resource('laboratorio/examenes', ExameneController::class)
->names('laboratorio.examenes');
Route::resource('laboratorio/solicitudes', SolicitudeController::class)
->names('laboratorio.solicitudes');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
