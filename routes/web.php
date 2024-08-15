<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController;

// $servicios=[
//     ['titulo'=>'Servicio 1'],
//     ['titulo'=>'Servicio 2'],
//     ['titulo'=>'Servicio 3'],
//     ['titulo'=>'Servicio 4'],
//     ['titulo'=>'Servicio 5'],
// ];


Route::view('/','home')->name('home');
Route::view('servicios','ser')->name('ser');
Route::view('proyectos','proyectos')->name('proyectos');
Route::view('blog','blog')->name('blog');
Route::view('nosotros','nosotros')->name('nosotros');

// controlador 1
// Ruta para listar todos los recursos
Route::get('personas', [ServiciosController::class, 'index'])->name('servicios');

// Ruta para mostrar el formulario de creación de un nuevo recurso
Route::get('personas/crear', [ServiciosController::class, 'create'])->name('servicios.create');

// Ruta para mostrar el formulario de creación de un nuevo recurso
Route::get('personas/{id}/editar', [ServiciosController::class, 'edit'])->name('servicios.edit');

// Ruta para mostrar el formulario de creación de un nuevo recurso
Route::put('personas/{id}', [ServiciosController::class, 'update'])->name('servicios.update');


// Ruta para almacenar un nuevo recurso
Route::post('personas', [ServiciosController::class, 'store'])->name('servicios.store');

// Ruta para mostrar un recurso específico
Route::get('personas/{id}', [ServiciosController::class, 'show'])->name('servicios.show');

// Ruta para eliminar
Route::delete('personas/{persona}', [ServiciosController::class, 'destroy'])->name('servicios.destroy');


// Route::resource('personas', ServiciosController::class)->names('servicios');

// Route::resource('personas', Servicios2Controller::class)
//     ->only(['index','create', 'store', 'show'])
//     ->names([
//         'index' => 'servicios',
//         'create' => 'servicios.create',
//         'store' => 'servicios.store',
//         'show' => 'servicios.show',
//     ]);


// controlador 2
// Route::get('servicios','App\Http\Controllers\Servicios2Controller@index' )->name('servicios');


Route::view('contacto','contacto')->name('contacto');
Route::post('contacto','App\Http\Controllers\ContactoController@store');



// route::resource('servicios','App\Http\Controllers\Servicios2Controller')->only('index','show');




//el q use
// Route::view('servicios','servicios', compact('servicios'))->name('servicios');

Auth::routes(['register'=>'false']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
