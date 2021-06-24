<?php

namespace App;

require __DIR__ . '/vendor/autoload.php';


$timezoneCore = new TimezoneCore;

echo $timezoneCore->selectTimezoneCanada() . '</br>';

echo $timezoneCore->selectTimezoneUkraine();
