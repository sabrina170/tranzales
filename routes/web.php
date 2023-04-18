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

// ----------------------------VEHICULOS--------------------------------------------
// PAG01
Route::get('/vehiculos', [AdminController::class, 'show_listado_vehiculos'])->name('admin.vehiculos.index');
Route::post('/crearVehiculo', [AdminController::class, 'create_crear_vehiculo'])->name('crear-vehiculo');
// PAG02
Route::get('IdEditVehiculo/{id}', [AdminController::class, 'edit_vehiculo'])->name('admin.vehiculos.edit-vehiculo');
Route::put('/UpdateVehiculo/{vehiculo}', [AdminController::class, 'update_vehiculo'])->name('update-vehiculo');
Route::delete('/DeleteVehiculo/{id}', [AdminController::class, 'delete_vehiculo'])->name('delete-vehiculo');


Route::get('/destinos', [AdminController::class, 'show_listado_destinos'])->name('admin.destinos');
Route::get('/clientes', [AdminController::class, 'show_listado_clientes'])->name('admin.clientes');
Route::post('crearCliente', [AdminController::class, 'create_crear_cliente'])->name('admin.crear-cliente');
Route::get('/BuscarP', [AdminController::class, 'buscarprovincia'])->name('buscarprovincia');
Route::get('/BuscarD', [AdminController::class, 'buscardistrito'])->name('buscardistrito');
