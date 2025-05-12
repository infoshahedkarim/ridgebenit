<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Service; 
use App\Models\Product; 

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
            $services = Service::all(); 
            $view->with('services', $services);
        });
         View::composer('*', function ($view) {
            $products = Product::all(); 
            $view->with('products', $products);
        });
    }
}
