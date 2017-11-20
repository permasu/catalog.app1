<?php

namespace App\Providers;

use App;
use Goutte\Client;
use Illuminate\Support\ServiceProvider;

class GoutteServiceProvider extends ServiceProvider
{

    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('goutte', function()
        {
            return new Client;
        });
    }

}
