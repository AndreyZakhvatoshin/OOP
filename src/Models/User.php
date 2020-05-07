<?php

namespace App\Models;

class User
{
    private $name;
    private $adress;

    public function __construct(Name $name, Adress $adress)
    {
        $this->name = $name;
        $this->adress = $adress;
    }
}