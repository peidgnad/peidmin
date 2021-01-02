<?php

namespace Peidgnad\Peidmin\Providers;

use Illuminate\Support\ServiceProvider;
use Route;

class PeidminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'peidmin');

        Route::get('/peidmin', function () {
            return view('peidmin::layouts.app');
        });
    }
}
