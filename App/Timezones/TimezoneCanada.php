<?php

namespace App\Timezones;

use App\Timezones\Interfaces\TimezoneInterface as TimezoneInterfaceAlias;

class TimezoneCanada implements TimezoneInterfaceAlias
{
    public function create($timezone): string
    {
        return $timezone;
    }

    public function time($timezone): string
    {
        date_default_timezone_set('America/Toronto');
        $date= date('Y-m-d:h-m-s') ;

        return $this->create($timezone) .' ' . $date;
    }
}