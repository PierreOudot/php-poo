<?php

namespace App\Animals;
use App\Animal;
use App\Interfaces\CanSwim;

class ClownFish extends Animal implements CanSwim{

    function __construct(){
        parent::__construct("clownfish");
    }

    public function getNoise():String{
        return "bloubloublou";
    }
}