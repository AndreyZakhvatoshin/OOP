<?php

namespace App\Models;

class Name
{
    public $firstName;
    public $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFull()
    {
        return $this->lastName . ' ' . $this->firstName;
    }

    public function sayHello()
    {
        echo 'Hello';
    }
}
