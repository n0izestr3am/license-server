<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('license')->namespace('n0izestr3am\AppLicenseServer\Controller')
      ->middleware('api')->group(function()
     {
	   Route::get('/check', 'AppLicenseController@check')->name('applicensecontroller.check');
    }

);