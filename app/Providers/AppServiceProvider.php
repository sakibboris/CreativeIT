<?php

namespace App\Providers;

use App\Models\Header;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        view()->composer('layouts.frontendapp', function($view){
            $view->with('header', Header::latest()->orderBy('updated_at', 'desc')->first());
        });
    }
}
