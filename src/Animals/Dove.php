<?php

namespace App\Animals;
use App\Animal;

class Dove extends Animal{

    function __construct(){
        parent::__construct("dove");
    }

    public function getNoise():String{
        return "Rou Rouuu";
    }
}