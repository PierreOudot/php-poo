<?php

namespace App\Animals;
use App\Animal;
use App\interfaces\CanWalk;

class Zebra extends Animal implements CanWalk{

    function __construct(){
        parent::__construct("zebra");
    }

    public function getNoise():String{
        return "hiiiii";
    }
}