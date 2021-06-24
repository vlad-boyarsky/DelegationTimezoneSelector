<?php

namespace App\Timezones;

class TimezoneCanada
{
    public function select(): mixed
    {
        date_default_timezone_set('Canada');

        if (date_default_timezone_get()) {
            return 'date_default_timezone_set: ' . date_default_timezone_get() . ' - Canada';
        }

        return 'Error - timezone not correct';
    }
}