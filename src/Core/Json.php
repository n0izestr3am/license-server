<?php

namespace n0izestr3am\AppLicenseServer\Core;

class Json
{
   public function response($status, $key_data = 'data', $data=null, $errors=null)
    {
        return response()->json([
            'status'    => $status,
            $key_data   => $data,
            'errors'    => $errors
        ],$status);
    }
}
