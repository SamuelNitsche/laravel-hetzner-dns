<?php

namespace SamuelNitsche\LaravelHetznerDns;

use Illuminate\Support\ServiceProvider;

class LaravelHetznerDnsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/laravel-hetzner-dns.php' => config_path('laravel-hetzner-dns.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-hetzner-dns.php', 'laravel-hetzner-dns');
    }
}
