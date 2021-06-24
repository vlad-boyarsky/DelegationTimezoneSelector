<?php

namespace App;

use App\Timezones\Interfaces\TimezoneInterface;
use App\Timezones\TimezoneCanada;
use App\Timezones\TimezoneUSA;

class TimezoneCore implements TimezoneInterface
{

    private $timezoneSelection;

    public function setTimezoneName($timezone): TimezoneInterface
    {
        return $timezone;
    }

    public function selectTimezoneUSA(): TimezoneCore
    {
        $this->timezoneSelection = new TimezoneUSA;

        return $this;
    }

    public function selectTimezoneCanada(): TimezoneCore
    {
        $this->timezoneSelection = new TimezoneCanada;

        return $this;
    }
}