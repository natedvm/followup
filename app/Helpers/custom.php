<?php

namespace App\Helpers;

class Custom
{

    public static function convertToDisplayFormat($string)
    {
        $new_string = str_replace('_',' ',$string);
        $new_string = ucfirst($new_string);
        return ucfirst($new_string);
    }
}

?>