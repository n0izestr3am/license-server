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
         $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
         $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
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
            __DIR__.'/../config/n0izestr3am/' => config_path('n0izestr3am')],'app-license-server');
        // $this->publishes([
        //     __DIR__.'/../migrations/' => database_path('migrations'),
        // ], 'app-license-server');

        
    }
}
