<?php

namespace n0izestr3am\AppLicenseServer\Core;

use Illuminate\Support\Str;

class SerialGenerator extends SerialType
{
	protected function generateSerial()
    {
    	if(config('n0izestr3am.app_license_server.char_type') == "alphanumeric") {

			return $this->alphanumeric();

    	} elseif(config('n0izestr3am.app_license_server.char_type') == "numeric") {

			return $this->numeric();

    	} 
    	elseif(config('n0izestr3am.app_license_server.char_type') == "alphabet") {

    		return $this->alphabet();

		} else {
			throw new \Exception('\''.config('n0izestr3am.app_license_server.char_type').'\' is not supported, supported char type : alphanumeric, numeric, or alphabet');

			return false;
		}
      
    }

}