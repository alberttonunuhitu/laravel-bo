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
        Blade::include('includes.seo', 'seo');
        Blade::include('includes.favicon', 'favicon');

        Blade::include('includes.navbar', 'navbar');
        Blade::include('includes.sidebar', 'sidebar');
        Blade::include('includes.footer', 'footer');

        Blade::include('includes.styles.fontawesome', 'fontawesome');
        Blade::include('includes.styles.overlayScrollbars', 'overlayScrollbarsStyle');
        Blade::include('includes.styles.tempusdominus', 'tempusdominusStyle');
        Blade::include('includes.styles.select2', 'select2Style');
        Blade::include('includes.styles.datatables', 'datatablesStyle');

        Blade::include('includes.scripts.bootstrap', 'bootstrapScript');
        Blade::include('includes.scripts.jquery', 'jqueryScript');
        Blade::include('includes.scripts.overlayScrollbars', 'overlayScrollbarsScript');
        Blade::include('includes.scripts.tempusdominus', 'tempusdominusScript');
        Blade::include('includes.scripts.select2', 'select2Script');
        Blade::include('includes.scripts.datatables', 'datatablesScript');
    }
}
