<?php
namespace App\Http\Controllers;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ControladorPrincipal;
use App\Http\Controllers\LoginController;


use Illuminate\Support\Facades\Route;

Route::get('/exito', function () {return view('exito');})->name('exito');

Route::post('/contacto', [ContactoController::class, 'store_contact']);

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/alimentos', function () {
    return view('alimentos');
});

Route::get('/alimentosPerros', function () {
    return view('alimentosPerros');
});

Route::get('/alimentosGatos', function () {
    return view('alimentosGatos');
});

Route::get('/alimentosCachorros', function () {
    return view('alimentosCachorros');
});

Route::get('/accesorios', function () {
    return view('accesorios');
});

Route::get('/ropa', function () {
    return view('ropa');
});

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