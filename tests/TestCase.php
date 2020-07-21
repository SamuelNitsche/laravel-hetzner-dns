<?php

namespace SamuelNitsche\LaravelHetznerDns\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use SamuelNitsche\LaravelHetznerDns\LaravelHetznerDnsServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelHetznerDnsServiceProvider::class,
        ];
    }
}
