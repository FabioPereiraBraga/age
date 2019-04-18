<?php

namespace App;

class Age 
{
    public $age;
    public $today;

    public function __construct($dob, $today)
    {
       $this->age = $dob;
       $this->today = $today;  
    }

    public function calculate()
    {
       return $this->today->diff($this->age)->format("%y");
    }
}