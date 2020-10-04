<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('alumnos', function () {
    return view('alumnos.prueba');
})->name('alumnos');

Route::get('register_docente', function(){
    return view('auth.register_docente');
})->name('register_docente');

Route::post('app_login', [PagesController::class, 'app_login'])->name('app_login');

Route::post('app_register', [PagesController::class,'app_register'])->name('app_register');

Route::post('app_register_docente', [PagesController::class, 'app_register_docente'])->name('app_register_docente');

Route::get('invitado', [PagesController::class, 'invitado'])->name('invitado');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


