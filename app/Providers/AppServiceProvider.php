<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Utilities\Partners;
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
        //
        view()->composer('layouts/app', function ($view) {
            $partners=Partners::all();
            $view->with('partners', $partners);
        });
    }
}
