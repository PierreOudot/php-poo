<?php

namespace App\Animals;
use App\Animal;
use App\Interfaces\CanSwim;

class Fish extends Animal implements CanSwim{

    function __construct(){
        parent::__construct("fish");
    }

    public function getNoise():String{
        return "bloubloublou";
    }
}