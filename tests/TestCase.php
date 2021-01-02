<?php

namespace Peidgnad\Peidmin\Test;

use Illuminate\Foundation\Application;
use Peidgnad\Peidmin\Providers\PeidminServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Get package providers.
     *
     * @param  Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            PeidminServiceProvider::class,
        ];
    }
}
