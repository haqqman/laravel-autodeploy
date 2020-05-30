<?php


namespace Haqqman\Autodeploy;

use Illuminate\Support\ServiceProvider;


class AutoDeployServiceProvider extends ServiceProvider
{
    public function boot() {
        // @todo register configs
        // @todo register views (for email notifications)
        // @todo register routes
    }

    public function register()
    {
        // @todo merge configs.
    }
}