<?php

namespace App\Providers;

use App\Plan;
use App\Trade;
use App\Currency;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
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
