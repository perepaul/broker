<?php

namespace App\Providers;

use App\Currency;
use App\Plan;
use Illuminate\Contracts\View\View;
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
        view()->composer('*', function ($view) {
            $currencies = Currency::all();
            $plans = Plan::all();
            return $view->with(compact('currencies', 'plans'));
        });
    }
}
