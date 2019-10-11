<?php

namespace Mrkatz\LaravelStubs\Providers;

use Illuminate\Database\MigrationServiceProvider;
use Illuminate\Foundation\Providers\ComposerServiceProvider;
use Illuminate\Foundation\Providers\ConsoleSupportServiceProvider as BaseServiceProvider;
use Mrkatz\LaravelStubs\Console\Configable;

class ConsoleSupportServiceProvider extends BaseServiceProvider
{
    use Configable;
    /**
     * The provider class names.
     *
     * @var array
     */
    protected $providers = [
        ArtisanServiceProvider::class,
        MigrationServiceProvider::class,
        ComposerServiceProvider::class,
    ];

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom($this->configPath . $this->configFileName, $this->getConfigName());

        parent::register();
    }

    /**
     * Bootstrapping the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            $this->configPath => config_path($this->configFileName),
        ], 'config');
    }
}
