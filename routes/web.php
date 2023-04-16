<?php

use App\Http\Controllers\AdminController;
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
Route::get('/dashboard', [AdminController::class, 'listarsolicitudes'])->name('admin.index');

// rutas solicitudes
// Route::view('/nuevaSolicitud', "admin.solicitudes")->name('admin.solicitudes');
Route::get('/nuevaSolicitud2', [AdminController::class, 'show_agregar_soli'])->name('admin.nueva-solicitud');
Route::post('crearSolicitud', [AdminController::class, 'create_crear_soli'])->name('admin.crear-solicitud');

// rutas choferes
Route::view('/choferes', [AdminController::class, 'show_listado_choferes'])->name('admin.choferes');
// rutas estadisticas
Route::view('/estadisticas', "admin.estadisticas")->name('admin.estadisticas');
// rutas usuarios
Route::view('/usuarios', "admin.usuarios")->name('admin.usuarios');
// rutas operarios
Route::view('/operarios', "admin.operarios")->name('admin.operarios');
Route::get('/vehiculos', [AdminController::class, 'show_listado_vehiculos'])->name('admin.vehiculos');
Route::post('/crearVehiculo', [AdminController::class, 'create_crear_vehiculo'])->name('admin.crear-vehiculo');

Route::get('/destinos', [AdminController::class, 'show_listado_destinos'])->name('admin.destinos');
Route::get('/clientes', [AdminController::class, 'show_listado_clientes'])->name('admin.clientes');
Route::post('crearCliente', [AdminController::class, 'create_crear_cliente'])->name('admin.crear-cliente');
Route::get('/BuscarP', [AdminController::class, 'buscarprovincia'])->name('buscarprovincia');
Route::get('/BuscarD', [AdminController::class, 'buscardistrito'])->name('buscardistrito');
