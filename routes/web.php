<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('login');
});

// DATOS DE LOGIN
Route::view('/login', "login")->name('login');
// Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Rutas del admin
Route::view('/dashboard', "admin.index")->name('admin.index');

// rutas solicitudes
Route::view('/nuevaSolicitud', "admin.solicitudes")->name('admin.solicitudes');

// rutas choferes
Route::view('/choferes', "admin.choferes")->name('admin.choferes');
// rutas estadisticas
Route::view('/estadisticas', "admin.estadisticas")->name('admin.estadisticas');
// rutas usuarios
Route::view('/usuarios', "admin.usuarios")->name('admin.usuarios');
// rutas operarios
Route::view('/operarios', "admin.operarios")->name('admin.operarios');
Route::view('/vehiculos', "admin.vehiculos")->name('admin.vehiculos');
