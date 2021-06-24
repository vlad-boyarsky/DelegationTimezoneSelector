<?php

namespace App\Timezones\Interfaces;


interface TimezoneInterface
{
    public function setTimezoneName($timezone): string;
}