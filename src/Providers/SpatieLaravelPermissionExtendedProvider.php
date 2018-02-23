<?php

namespace Lloricode\SpatieLaravelPermissionExtended\Providers;

use Illuminate\Support\ServiceProvider;
// use Lloricode\LaravelHtmlTable\LaravelHtmlTableGenerator;

class SpatieLaravelPermissionExtendedProvider extends ServiceProvider
{
        /**
        * Bootstrap the application services.
        *
        * @return void
        */
        public function boot()
        { 
                //
        }
        /**
        * Register the application services.
        *
        * @return void
        */
        public function register()
        {
            //     $this->app->singleton('lloricodelaravelhtmltable', function ($app) {
 			// return new LaravelHtmlTableGenerator;
            //      });
        }
}