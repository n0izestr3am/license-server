<?php

namespace n0izestr3am\AppLicenseServer\Facades;

use Illuminate\Support\Facades\Facade;

class AppLicenseServer extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \n0izestr3am\AppLicenseServer\Func\License::class;
    }
}
