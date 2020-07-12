<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::include('includes.navbar', 'navbar');
        Blade::include('includes.sidebar', 'sidebar');
        Blade::include('includes.footer', 'footer');
    }
}
