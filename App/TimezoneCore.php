<?php

namespace App;

use App\Timezones\Interfaces\TimezoneInterface;
use App\Timezones\TimezoneCanada;
use App\Timezones\TimezoneUkraine;

class TimezoneCore implements TimezoneInterface
{

    private $timezoneSelection;

    public function __construct()
    {
        $this->timezoneSelection = new TimezoneUkraine;
    }

    public function selectTimezoneUkraine(): void
    {
        $this->timezoneSelection = new TimezoneUkraine;
    }

    public function selectTimezoneCanada(): void
    {
        $this->timezoneSelection = new TimezoneCanada;
    }

    public function create($timezone): string
    {
        return $this->timezoneSelection->create($timezone);
    }

    public function time($timezone): string
    {
        return $this->timezoneSelection->time($timezone);
    }
}