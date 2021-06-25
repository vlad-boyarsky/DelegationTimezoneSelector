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
        return $this->create($timezone) .' ' . time();
    }
}