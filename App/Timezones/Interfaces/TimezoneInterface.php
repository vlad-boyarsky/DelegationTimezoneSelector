<?php

namespace App\Timezones\Interfaces;


interface TimezoneInterface
{
    public function create($timezone): string;

    public function time($timezone): string;
}