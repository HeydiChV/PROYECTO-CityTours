<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LugarTuristicoController;
use App\Http\Controllers\PaqueteTuristicoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Admin\AdminPaqueteTuristicoController;
use App\Http\Controllers\Admin\AdminReservaController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/lugares-turisticos', [LugarTuristicoController::class, 'index']);

// Rutas para Paquetes Turísticos
Route::get('/paquetes', [PaqueteTuristicoController::class, 'index']);
Route::get('/paquetes/{id}', [PaqueteTuristicoController::class, 'show']);

// Rutas para Reservas
Route::get('/paquetes/{id}/reservar', [ReservaController::class, 'create']);
Route::post('/paquetes/{id}/reservar', [ReservaController::class, 'store']);
Route::get('/reservas', [ReservaController::class, 'index']);

// Rutas para Perfil de Usuario
Route::get('/perfil', [UserProfileController::class, 'show']);
Route::get('/perfil/editar', [UserProfileController::class, 'edit']);
Route::put('/perfil/editar', [UserProfileController::class, 'update']);

// Rutas para Administradores
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/paquetes', [AdminPaqueteTuristicoController::class, 'index']);
    Route::get('/paquetes/crear', [AdminPaqueteTuristicoController::class, 'create']);
    Route::post('/paquetes/crear', [AdminPaqueteTuristicoController::class, 'store']);
    Route::get('/paquetes/{id}/editar', [AdminPaqueteTuristicoController::class, 'edit']);
    Route::put('/paquetes/{id}/editar', [AdminPaqueteTuristicoController::class, 'update']);
    Route::delete('/paquetes/{id}', [AdminPaqueteTuristicoController::class, 'destroy']);

    Route::get('/reservas', [AdminReservaController::class, 'index']);
    Route::get('/reservas/{id}', [AdminReservaController::class, 'show']);
    Route::put('/reservas/{id}', [AdminReservaController::class, 'update']);
});

//------------------------------------------------------------------------
Route::get('/pagina-web/registro-usuario', 
[UserProfileController::class ,'registroUsuario']
)->name('registro.usuarios');

Route::get('/pagina-web/registro-paquete', 
[PaqueteTuristicoController::class ,'registroPaquete']
)->name('registro.paquetes');

Route::post('/pagina-web/guardar-usuario', 
[UserProfileController::class ,'guardarUsuario']
)->name('guardar.usuario');

Route::post('/pagina-web/guardar-paquete', 
[PaqueteTuristicoController::class ,'guardarPaquete']
)->name('guardar.paquete');

Route::delete('/pagina-web/eliminar-usuarios/{id}',
[UserProfileController::class, 'eliminarUsuario']
)->name('eliminar.usuarios');

Route::delete('/pagina-web/eliminar-paquetes/{id}',
[PaqueteTuristicoController::class, 'eliminarPaquete']
)->name('eliminar.paquetes');

//------------
Route::get('/lista-usuarios', 
[UserProfileController::class ,'listarUsuario']
)->name('lista-usuarios');


Route::get('/lista-paquetes', 
[PaqueteTuristicoController::class ,'listarPaquete']
)->name('lista-paquetes');

Route::get('/editar-usuarios/{id}',
[UserProfileController::class, 'editarUsuario']
)->name('editar.usuario');

Route::put('/actualizar-usuario/{id}', 
[UserProfileController::class ,'actualizarUsuario']
)->name('actualizar.usuario');

Route::get('/editar-paquetes/{id}',
[PaqueteTuristicoController::class, 'editarPaquete']
)->name('editar.paquete');

Route::put('/actualizar-paquete/{id}', 
[PaqueteTuristicoController::class ,'actualizarPaquete']
)->name('actualizar.paquete');
