<?php

namespace App\Animals;
use App\Animal;

class ClownFish extends Animal{

    function __construct(){
        parent::__contruct("clownfish");
    }

    public function getNoise():String{
        return "bloubloublou";
    }
}