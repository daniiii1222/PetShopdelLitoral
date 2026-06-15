<?php
namespace App\Http\Controllers;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ControladorPrincipal;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\PerfilController;

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

  Route::post(
        '/carrito/confirmar',
        [CarritoController::class, 'confirmar']
    )->name('carrito.confirmar');

    Route::get('/perfil', [PerfilController::class, 'show'])->name('perfil.show');
    Route::get('/perfil/editar', [PerfilController::class, 'edit'])->name('perfil.edit');
    Route::put('/perfil', [PerfilController::class, 'update'])->name('perfil.update');
    Route::get('/mis-compras', [PerfilController::class, 'misCompras'])->name('perfil.misCompras');
}); 

Route::get('/carrito/finalizarCompra', [CarritoController::class, 'checkout'])
    ->name('carrito.finalizarCompra');

Route::patch('/productos/{id}/activar', [ProductoController::class, 'activar'])
    ->name('productos.activar');

Route::get(
    '/productos/categoria/{id}',
    [ProductoController::class, 'productosPorCategoria']
)->name('productos.productosPorCategoria');

Route::get('/productos/buscar', [ProductoController::class, 'buscar'])
    ->name('productos.buscar');

Route::resource('productos', ProductoController::class);

Route::resource('carrito', CarritoController::class);

Route::get(
    '/admin/productos/listado',
    [ProductoController::class, 'listado']
)->name('productos.listado');

Route::get('/admin/consultas', [ContactoController::class, 'index'])->name('consultas.index');

Route::get('/admin/consultas/{id}', [ContactoController::class, 'show'])->name('consultas.show');

