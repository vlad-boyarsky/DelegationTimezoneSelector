<?php

namespace App;

use App\Timezones\Interfaces\TimezoneInterface;
use App\Timezones\TimezoneCanada;
use App\Timezones\TimezoneUkraine;

class TimezoneCore implements TimezoneInterface
{

    private $timezoneSelection;

    public function setTimezoneName($timezone): string
    {
        return $this->timezoneSelection->setTimezoneName($timezone);
    }

    public function selectTimezoneUkraine(): string
    {
        $this->timezoneSelection = new TimezoneUkraine;

        return $this->timezoneSelection->select();
    }

    public function selectTimezoneCanada(): string
    {
        $this->timezoneSelection = new TimezoneCanada;

        return $this->timezoneSelection->select();
    }
}