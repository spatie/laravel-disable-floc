<?php

namespace Spatie\DisableFloc\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\DisableFloc\DisableFlocServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            DisableFlocServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('app.key', 'base64:m+pDa0MKS1KpMlxzzdVEaqFHysv3IPhrx/3TFSWBqJA=');
    }
}
