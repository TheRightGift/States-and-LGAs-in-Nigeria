<?php

namespace Goziechukwu\NSAL;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class NsalServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //Register Controller
        $this->app->make('Goziechukwu\NSAL\NsalController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // Export the migration
            if (!class_exists('CreateStatesTable')) {
              $this->publishes([
                __DIR__ . '/database/migrations/2019_10_10_000000_create_states_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_states_table.php'),
                __DIR__ . '/database/migrations/2019_10_10_100000_create_lgas_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_lgas_table.php'),
                // you can add any number of migrations here
              ], 'migrations');

              $this->publishes([
                __DIR__ . '/database/seeders/StateSeeder.php' => database_path('seeders/StateSeeder.php'),
                __DIR__ . '/database/seeders/LgaSeeder.php' => database_path('seeders/LgaSeeder.php'),
              ], 'seeders');

              $this->publishes([
                __DIR__ . '/database/data/state.json' => database_path('data/state.json'),
                __DIR__ . '/database/data/lga.json' => database_path('data/lga.json'),
              ], 'data');
            }
        }

        Schema::defaultStringLength(191);
        
        include __DIR__.'/routes.php';
    }
}
