<?php

namespace App;

require __DIR__ . '/vendor/autoload.php';


$timezoneCore = new TimezoneCore;

echo $timezoneCore->create('Canada ');
echo $timezoneCore->time('Canada');

echo '</br>';

$timezoneCore->selectTimezoneCanada();
echo $timezoneCore->create('Ukraine ');
echo $timezoneCore->time('Ukraine');


