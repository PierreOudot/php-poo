<?php

namespace App\Animals;
use App\Animal;

class Dove extends Animal{

    function __construct(){
        parent::__contruct("dove");
    }

    public function getNoise():String{
        return "Rou Rouuu";
    }
}