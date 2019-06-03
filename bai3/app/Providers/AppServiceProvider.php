<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Validator;

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
        Schema::defaultStringLength(191);
        // ----------------------
        Validator::extend('in_phone', function($attribute, $value, $parameters){
            return substr($value, 0, 3) == '+84';
        });
        Validator::extend('ss', function($attribute, $value, $parameters){
            return $value < date(Y);
        });
    }
}
