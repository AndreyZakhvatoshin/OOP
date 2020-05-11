<?php

namespace App\Models;

use App\Models\Name;
use App\Models\Adress;

class User
{
    private $name;
    private $adress;

    public function __construct(Name $name, Adress $adress = null)
    {
        $this->name = $name;
        $this->adress = $adress;
    }

    public function getName()    
    {
        echo $this->name->firstName;
    }

    public function getAdress()
    {
        return $this->adress;
    }

    public function rename(Name $name)
    {
        $this->name = $name;
    }
}
