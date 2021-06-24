<?php

namespace App;

require __DIR__ . '/vendor/autoload.php';


$timezoneCore = new TimezoneCore;

$timezoneCore->selectTimezoneUSA()->setTimezoneName('USA');

var_dump($timezoneCore);

$timezoneCore->selectTimezoneCanada()->setTimezoneName('Canada');

var_dump($timezoneCore);