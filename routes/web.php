<?php
namespace App\Http\Controllers;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ControladorPrincipal;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VentaController;


use Illuminate\Support\Facades\Route;

Route::get('/exito', function () {return view('exito');})->name('exito');

Route::post('/contacto', [ContactoController::class, 'store_contact']);

Route::get('/', [ControladorPrincipal::class, 'inicio'])->name('principal');
Route::get('/quienesSomos', [ControladorPrincipal::class, 'nosotros'])->name('quienesSomos');
Route::get('/contacto', [ControladorPrincipal::class, 'contacto'])->name('contacto');
Route::get('/terminosYUsos', [ControladorPrincipal::class, 'terminos'])->name('terminosYUsos');
Route::get('/categorias', [ControladorPrincipal::class, 'categorias'])->name('categorias');
Route::get('/comercializacion', [ControladorPrincipal::class, 'comercializacion'])->name('comercializacion');


Route::get('/formularioLogin', [LoginController::class, 'login'])->name('login');
Route::post('/registro', [LoginController::class, 'procesarLogin']) ->name('registro.procesarLogin');
Route::post('/procesarRegistro', [LoginController::class, 'procesarRegistro']) ->name('procesarRegistro.procesarRegistro');   
Route::post('/logout', [LoginController::class, 'logout'])
->name('logout');


//Route::get('/dashboard', [ControladorPrincipal::class, 'dashboard'])->name('dashboard');
Route::get('dashboard', [AdminController::class, 'dashboard'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {

Route::resource('ventas', VentaController::class);
}); 

Route::resource('productos', ProductoController::class);