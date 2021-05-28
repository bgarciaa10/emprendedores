<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use Cart;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('front.estado', function ($view){
           $view->with('carritoCount', Cart::getContent()->cont());
        });

        View::composer('front.resumen', function ($view){
            $view->with('carritoCount', Cart::getContent()->cont());
        });
    }
}
