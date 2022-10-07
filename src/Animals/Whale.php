<?php

namespace App\Animals;
use App\Animal;

class Whale extends Animal{

    function __construct(){
        parent::__contruct("whale");
    }

    public function getNoise():String{
        return "bloubloublou";
    }
}