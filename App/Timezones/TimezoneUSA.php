<?php

namespace App\Timezones;

class TimezoneCanada
{
    public function select(): mixed
    {
        date_default_timezone_set('USA');

        if (date_default_timezone_get()) {
            return 'date_default_timezone_set: ' . date_default_timezone_get() . ' - USA';
        }

        return 'Error - timezone not correct';
    }
}