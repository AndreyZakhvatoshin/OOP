<?php

namespace App\Models;

class Name
{
    public $firstName;
    public $lastName;

    public function __construct(string $firstName = 'Guest', string $lastName = 'Unregister')
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
        $templates = new \League\Plates\Engine('../src/Views/templates');

        // Render a template
        echo $templates->render('main', ['name' => 'Jonathan']);
    }
}
