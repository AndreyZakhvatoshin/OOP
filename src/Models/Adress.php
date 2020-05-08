<?php

namespace App\Models;

class Adress
{
    public $city;
    public $street;
    public $house;

    public function __construct(string $city, string $street, string $house)
    {
        $this->city = $city;
        $this->street = $street;
        $this->house = $house;
    }
}