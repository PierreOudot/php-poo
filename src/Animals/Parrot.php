<?php

namespace App\Animals;
use App\Animal;
use App\interfaces\CanFly;

class Parrot extends Animal implements CanFly{

    function __construct(){
        parent::__construct("parrot");
    }

    public function getNoise():String{
        return "coco";
    }
}