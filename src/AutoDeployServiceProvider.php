<?php

namespace Haqqman\Autodeploy;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;


class AutoDeployServiceProvider extends ServiceProvider
{
    public function boot() {
        $this->registerResources();

        // register views path (for email notification)
        $this->loadViewsFrom(__DIR__.'/../resources/views/', 'autodeploy');

        // register routes for web hooks.
        $this->registerRoutes();
    }

    public function register()
    {
        //
    }

    /**
     * publish configuration file, and sample deployment script.
     */
    public function registerResources()
    {
        // public configuration to user's config path.
        $this->publishes([
            __DIR__.'/../configs/autodeploy.php' => config_path('autodeploy.php')
        ], 'autodeploy');

        $this->publishes([
            __DIR__.'/../autodeploy.sh' => base_path('autodeploy.sh')
        ], 'autodeploy');
    }

    /**
     * Register package routes - github and bitbucket web hook route handler.
     */
    protected function registerRoutes()
    {
        Route::group(['namespace' => 'Haqqman\Autodeploy\Http\Controllers'], function() {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }
}