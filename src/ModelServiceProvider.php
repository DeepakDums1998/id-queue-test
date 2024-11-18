<?php

namespace DeepakDums1998\IdQueuePackagist;
use DeepakDums1998\IdQueuePackagist\Commands\ExportModelsCommand;
use Illuminate\Support\ServiceProvider;

class ModelServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(ModelLister::class, function ($app) {
            return new ModelLister;
        });
    }

    public function boot()
    {
        // Load migrations from the package
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // Allow users to publish migrations to their project
        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'id-queue-migrations');
        if ($this->app->runningInConsole()) {

            $this->commands([
                ExportModelsCommand::class,
            ]);
        }
    }
}
