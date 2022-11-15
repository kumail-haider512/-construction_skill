<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Blade;
use Route;
use App\Models\Setting;


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
        Blade::if('routeis', function ($expression) {
            return fnmatch($expression, Route::currentRouteName());
        });
        view()->composer('*', function($view){
            $view->with('setting', Setting::pluck('value', 'key')->toArray());
        });
    }
}
