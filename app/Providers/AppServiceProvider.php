<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);
		\Validator::extend('without_spaces', function($attr, $value){
			return preg_match('/^\S*$/u', $value);
		});
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
