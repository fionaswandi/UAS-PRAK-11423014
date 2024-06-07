<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon; // Add this line

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        setLocale(LC_ALL, "id_ID.utf8");   
        Carbon::setLocale("id_ID.utf8");  
        date_default_timezone_set('Asia/Jakarta');

        if(config('app.env') == "production"){
            // Production-specific logic
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
