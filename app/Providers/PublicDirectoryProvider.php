<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PublicDirectoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if($this->app->environment() === 'production')
        {
            $this->app['path.public'] = base_path().'/public_html';
        }
    }
}
