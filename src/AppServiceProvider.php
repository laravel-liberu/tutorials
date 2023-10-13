<?php

namespace LaravelLiberu\Tutorials;

use Illuminate\Support\ServiceProvider;
use LaravelLiberu\DynamicMethods\Services\Methods;
use LaravelLiberu\Permissions\Models\Permission;
use LaravelLiberu\Tutorials\DynamicRelations\Tutorials;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->load()
            ->publish();

        Methods::bind(Permission::class, [Tutorials::class]);
    }

    private function load()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/tutorials.php', 'liberu.tutorials');

        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        return $this;
    }

    private function publish()
    {
        $this->publishes([
            __DIR__.'/../config' => config_path('liberu'),
        ], ['tutorials-config', 'liberu-config']);

        $this->publishes([
            __DIR__.'/../database/factories' => database_path('factories'),
        ], ['tutorials-factory', 'liberu-factories']);
    }
}
