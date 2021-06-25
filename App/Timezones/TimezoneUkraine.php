<?php

namespace App\Timezones;

use App\Timezones\Interfaces\TimezoneInterface;

class TimezoneUkraine implements TimezoneInterface
{
    public function create($timezone): string
    {
        return $timezone;
    }

    public function time($timezone): string
    {
        date_default_timezone_set('Europe/Kiev');
        $date= date('Y-m-d:h-m-s') ;

        return $this->create($timezone) .' ' . $date;
    }
}