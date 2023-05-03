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
// ---------------------------TRABAJADORES(USURAIOS)--------------------------------------------------------------
Route::get('/usuarios', [AdminController::class, 'show_listado_usuarios'])->name('admin.usuarios.index');
Route::post('/crearusuario', [AdminController::class, 'crear_usuario'])->name('crear-usuario');
// Pag02
Route::get('IdEditUsuario/{id}', [AdminController::class, 'edit_usuario'])->name('admin.usuarios.edit-usuario');
Route::put('/UpdateUsuario/{usuario}', [AdminController::class, 'update_usuario'])->name('update-usuario');
Route::delete('/DeleteUsuario/{id}', [AdminController::class, 'delete_usuario'])->name('delete-usuario');
// rutas operarios
Route::view('/operarios', "admin.operarios")->name('admin.operarios');

// ----------------------------VEHICULOS-------------------------------------------------------------------------
// PAG01
Route::get('/vehiculos', [AdminController::class, 'show_listado_vehiculos'])->name('admin.vehiculos.index');
Route::post('/crearVehiculo', [AdminController::class, 'create_crear_vehiculo'])->name('crear-vehiculo');
// PAG02
Route::get('IdEditVehiculo/{id}', [AdminController::class, 'edit_vehiculo'])->name('admin.vehiculos.edit-vehiculo');
Route::put('/UpdateVehiculo/{vehiculo}', [AdminController::class, 'update_vehiculo'])->name('update-vehiculo');
Route::delete('/DeleteVehiculo/{id}', [AdminController::class, 'delete_vehiculo'])->name('delete-vehiculo');

// --------------------------CHOFERES----------------------------------------------------------------------------
// PAG01
Route::get('/choferes', [AdminController::class, 'show_listado_choferes'])->name('admin.choferes.index');
Route::post('/crearChofer', [AdminController::class, 'crear_chofer'])->name('crear-chofer');
// PAG02
Route::get('IdEditchofer/{id}', [AdminController::class, 'edit_chofer'])->name('admin.choferes.edit-chofer');
Route::put('/Updatechofer/{chofer}', [AdminController::class, 'update_chofer'])->name('update-chofer');
Route::delete('/Deletechofer/{id}', [AdminController::class, 'delete_chofer'])->name('delete-chofer');

// --------------------------------DESTINOS----------------------------------------------------------------------------
Route::get('/destinos', [AdminController::class, 'show_listado_destinos'])->name('admin.destinos.index');
Route::post('/crearDestino', [AdminController::class, 'crear_destino'])->name('creardestino');

// ----------------------------------------CLIENTES----------------------------------------------------------------
Route::get('/clientes', [AdminController::class, 'show_listado_clientes'])->name('admin.clientes.index');
Route::post('/crearCliente', [AdminController::class, 'create_crear_cliente'])->name('crearcliente');

// -----------------------------------------RUTAS-----------------------------------------------------------------
Route::get('/rutas', [AdminController::class, 'show_listado_rutas'])->name('admin.rutas.index');
Route::post('/crearRuta', [AdminController::class, 'crear_ruta'])->name('crear-ruta');
Route::get('/BuscarOri', [AdminController::class, 'buscarorigen'])->name('buscarorigen');
Route::get('/BuscarDes', [AdminController::class, 'buscardestino'])->name('buscardestino');

// ----------------------------------------------------------------------------------------------------------------
Route::get('/BuscarP', [AdminController::class, 'buscarprovincia'])->name('buscarprovincia');
Route::get('/BuscarD', [AdminController::class, 'buscardistrito'])->name('buscardistrito');
