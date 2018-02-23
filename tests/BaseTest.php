<?php

namespace Tests;

class BaseTest extends \Orchestra\Testbench\TestCase
{
    public function setUp()
    {
        parent::setUp();
        
        $this->loadLaravelMigrations();
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->artisan('migrate', ['--database' => 'testbench']);
        $this->withFactories(__DIR__.'/factories');
	}

	
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
	}
	
    protected function getPackageProviders($app)
    {
        return ['Lloricode\SpatieLaravelPermissionExtended\Providers\SpatieLaravelPermissionExtendedProvider'];
    }
}