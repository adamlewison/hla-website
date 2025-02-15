<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        
        if (env('APP_ENV') == 'production') {
            Schema::defaultStringLength(191);

            $this->app->bind('path.public', function() {
                return base_path().'/../public_html';
            });
        }
         
    }
}
