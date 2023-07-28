<?php

namespace n0izestr3am\AppLicenseServer\Models;

use Illuminate\Database\Eloquent\Model;

class LicenseSerial extends Model
{
	protected $table = 'license_serials';
    protected $fillable = [
    	'name',
    	'domain',
    	'email',
    	'phone_number',
    	'notif',
    	'price',
    	'judul_notif',
    	'tgl_notif',
    	'address',
    	'serial',
    	'date',
    	'expired',
    	'status'];
}

