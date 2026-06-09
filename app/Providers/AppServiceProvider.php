<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Venta;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {

            if (Auth::check()) {

                $carrito = Venta::with('detalles.producto')
                    ->where('usuario_id', Auth::id())
                    ->where('estado', 'pendiente')
                    ->first();

                $items = $carrito
                    ? $carrito->detalles
                    : collect();

                $view->with('carrito', $carrito);
                $view->with('items', $items);

            } else {

                $view->with('carrito', null);
                $view->with('items', collect());
            }
        });
    }
}
