

# 🚀Lisensi aplikasi untuk server endpoint (Laravel)


This package based on [app-license-server for Laravel](https://github.com/irfaardy/app-license-server) package.


    composer require n0izestr3am/license-server


<h2>🛠️ Laravel Setup </h2>

<h3>Add to config/app.php</h3>

    'providers' => [
        ....
       n0izestr3am\AppLicenseServer\AppLicenseServerServiceProvider::class,
         ];



<h3>Add to config/app.php</h3>

    'aliases' => [
             ....
      'ALS' => n0izestr3am\AppLicenseServer\Facades\AppLicenseServer::class,
    
        ],

  <h2>Publish Vendor</h2>


    php artisan vendor:publish --tag=app-license-server

<h2>Run Migration</h2>

```
 php artisan migrate --path=vendor/n0izestr3am/license-server/migrations
```

<h2>Config File</h2>

    config/n0izestr3am/app_license_server.php

<h2>Inside Config File</h2>


```php
<?php 
	return [ 


                'license_route'		=> '/check/license',


                'route_name'		=> 'check_license',


                'char_type'			=> 'alphanumeric', //Type alphanumeric,numeric,or alphabet

                'length'			=> 4,//default : 4

                'segment'			=> 4,//default : 4

                'striped'			=> true,//default : true



];

    	
    
```


  
<h2>Register New Serial Number License</h2>


```php
<?php

namespace App\Http\Controllers;

use ALS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LicenseController extends Controller
{
   
    public function register(Request $request)
    {
      	return ALS::register(['name'=>"Lorem",
      						'domain'=>"example.com",
      						'phone_number'=>"08123123",
      						'address'=>"Bandung,Indonesia"],now()->addDays(30));	
    }
}
```
<h2> Check License</h2>

```php
<?php

namespace App\Http\Controllers;

use ALS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LicenseController extends Controller
{

    public function check(Request $request)
    {
      	return ALS::serial($request->serial)->check();	
    }

}
```

<h2>Disabled Serial number</h2>

```php
ALS::serial($request->serial)->disabled();	
```

<h2>Enabled serial number</h2>

```php
ALS::serial($request->serial)->disabled();
```

​	
