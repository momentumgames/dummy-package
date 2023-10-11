<?php

namespace MomentumGames\DummyPackage;

use Illuminate\Support\ServiceProvider;

class DummyPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/dummy.php');
        
        // Publicar las rutas si el paquete se está cargando desde la aplicación principal.
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/routes' => base_path('routes/vendor/dummy-package'),
            ], 'dummy-routes');
        }
    }

    public function register()
    {
        //
    }
}
