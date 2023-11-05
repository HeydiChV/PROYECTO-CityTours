
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




