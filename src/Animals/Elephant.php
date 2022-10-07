<?php

namespace App\Animals;
use App\Animal;

class Elephant extends Animal{

    function __construct(){
        parent::__contruct("elephant");
    }

    public function getNoise():String{
        return "toooooout";
    }
}