<?php

namespace App;

use App\Timezones\Interfaces\TimezoneInterface;

class TimezoneCore implements TimezoneInterface
{

    public function setTimezoneName($timezone): TimezoneInterface
    {
        return $timezone;
    }

    public function selectTimezoneUSA()
    {

    }

    public function selectTimezoneCanada()
    {
        
    }
}