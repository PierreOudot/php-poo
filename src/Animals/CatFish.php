<?php

namespace App\Animals;
use App\Animal;

class CatFish extends Animal{

    function __construct(){
        parent::__contruct("catFish");
    }

    public function getNoise():String{
        return "bloubloublou";
    }
}