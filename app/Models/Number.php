<?php

namespace App\Models;

class Number
{
    private $number;
    
    public function __construct(int $number){
        $this->number = $number;
    }
    public function getNumber(){return $this->number;}
}
