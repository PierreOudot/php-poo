<?php

namespace App\Animals;
use App\Animal;
use App\Interfaces\CanSwim;

class Whale extends Animal implements CanSwim{

    function __construct(){
        parent::__construct("whale");
    }

    public function getNoise():String{
        return "bloubloublou";
    }
}
?>