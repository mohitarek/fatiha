<?php

namespace tk\fatiha;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class PostViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load package views
        $this->loadViewsFrom(__DIR__.'/views', 'tarek');

        // Load package routes
        $this->loadRoutesFrom(__DIR__.'/routes.php');
		
		$this->publishes([
        __DIR__.'/views' => resource_path('views/vendor/tarek'),
    ], 'views');
    }

    public function register()
    {
        // Register any package-specific services or bindings here
    }
}
