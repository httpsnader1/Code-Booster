<?php

namespace CodeBooster;

use Illuminate\Support\ServiceProvider;

class CodeBoosterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/routes.php');

        $this->publishes([
            __DIR__ . '/../config/js' => public_path('config/code-booster.php')
        ], 'code-booster-config');
    }

    public function register()
    {
        //
    }
}
