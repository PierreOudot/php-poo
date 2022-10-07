<?php

namespace App\Animals;
use App\Animal;
use App\interfaces\CanWalk;

class Elephant extends Animal implements CanWalk{

    function __construct(){
        parent::__construct("elephant");
    }

    public function getNoise():String{
        return "toooooout";
    }
}