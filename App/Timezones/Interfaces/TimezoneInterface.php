<?php

namespace App\Timezones\Interfaces;


interface TimezoneInterface
{
    public function setTimezone($timezone): TimezoneInterface;
}