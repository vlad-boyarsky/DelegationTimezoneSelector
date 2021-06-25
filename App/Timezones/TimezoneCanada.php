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
        return $this->create($timezone) .' ' . date("Y-m-d H:i:s");
    }
}