<?php

namespace n0izestr3am\AppLicenseServer;

use Illuminate\Support\ServiceProvider;

class AppLicenseServerServiceProvider extends ServiceProvider
{
    protected $namespace='AppLicenseServer\Controllers';
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Route::middleware('api')->any(config('n0izestr3am.app_license_server.license_route'),'n0izestr3am\AppLicenseServer\Controller\AppLicenseController@check')->name(config('n0izestr3am.app_license_server.route_name'));
        $this->publishes([
            __DIR__.'/../config/n0izestr3am/' => config_path('n0izestr3am')],'license-server');
        $this->publishes([
            __DIR__.'/../migrations/' => database_path('migrations'),
        ], 'license-server');

        
    }
}
