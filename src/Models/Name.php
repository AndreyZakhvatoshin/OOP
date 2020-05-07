<?php

namespace App\Models;

class Name
{
    private $firstName;
    private $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFull()
    {
        return $this->lastName . ' ' . $this->firstName;
    }

    public function rename(string $firstName, string $lastName)
    {

    }
}