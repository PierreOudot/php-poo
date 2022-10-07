<?php

namespace App\Animals;
use App\Animal;

class Fish extends Animal{

    function __construct(){
        parent::__construct("fish");
    }

    public function getNoise():String{
        return "bloubloublou";
    }
}