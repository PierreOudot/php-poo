<?php

namespace App\Animals;
use App\Animal; // si usage unique appeler au niveau de la fonction ex :App\Animal\x $var
use App\interfaces\CanFly;

class Dove extends Animal implements CanFly{

    function __construct(){
        parent::__construct("dove");
    }

    public function getNoise():String{
        return "Rou Rouuu";
    }
}