<?php

use App\Http\Controllers\ApoderadoLegalController;
use App\Http\Controllers\DesarrolloController;
use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SolicitudVistoBuenoController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
});

/*Route::get('/', function () {
    return view('dashboard');
});
*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('pdf');
});

Route::resource('empresas', EmpresaController::class);

Route::prefix('{empresa}/desarrollos')->group(function () {
    Route::get('/', [DesarrolloController::class, 'index'])->name('desarrollos.index');  // Listar desarrollos de una empresa
    Route::get('/create', [DesarrolloController::class, 'create'])->name('desarrollos.create');  // Mostrar formulario de creación
    Route::post('/', [DesarrolloController::class, 'store'])->name('desarrollos.store');  // Guardar nuevo desarrollo
    Route::get('/{desarrollo}/edit', [DesarrolloController::class, 'edit'])->name('desarrollos.edit');  // Editar desarrollo
    Route::put('/{desarrollo}', [DesarrolloController::class, 'update'])->name('desarrollos.update');  // Actualizar desarrollo
    Route::delete('/{desarrollo}', [DesarrolloController::class, 'destroy'])->name('desarrollos.destroy');  // Eliminar desarrollo
});

Route::prefix('{empresa}/apoderados')->group(function () {
    Route::get('/', [ApoderadoLegalController::class, 'index'])->name('apoderados.index');  
    Route::get('/create', [ApoderadoLegalController::class, 'create'])->name('apoderados.create');  
    Route::post('/', [ApoderadoLegalController::class, 'store'])->name('apoderados.store');  
    Route::get('/{apoderado}/edit', [ApoderadoLegalController::class, 'edit'])->name('apoderados.edit');  
    Route::put('/{apoderado}', [ApoderadoLegalController::class, 'update'])->name('apoderados.update');  
    Route::delete('/{apoderado}', [ApoderadoLegalController::class, 'destroy'])->name('apoderados.destroy');  
});

Route::prefix('{desarrollo}/visto-bueno')->group(function () {
    Route::get('/', [SolicitudVistoBuenoController::class, 'index'])->name('visto-bueno.index');  
    Route::get('/create', [SolicitudVistoBuenoController::class, 'create'])->name('visto-bueno.create');  
    Route::post('/', [SolicitudVistoBuenoController::class, 'store'])->name('visto-bueno.store');  
    Route::get('/{solicitud}/edit', [SolicitudVistoBuenoController::class, 'edit'])->name('visto-bueno.edit');  
    Route::put('/{solicitud}', [SolicitudVistoBuenoController::class, 'update'])->name('visto-bueno.update');  
    Route::delete('/{solicitud}', [SolicitudVistoBuenoController::class, 'destroy'])->name('visto-bueno.destroy');  
});