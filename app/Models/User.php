<?php

namespace App\Models;

class User
{
    public $first_name;

    public function setFirstName($firstname)
    {
        $this->first_name = $firstname;
    }

    public function getFirstName()
    {
        return 'Billy';
    }
}
