<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('license')->namespace('n0izestr3am\AppLicenseServer\Controller')
      ->middleware('web')->group(function()
     {
	  Route::get('/check', 'AppLicenseController@check')->name('applicensecontroller.check');
    }

);