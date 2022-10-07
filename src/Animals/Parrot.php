<?php

namespace App\Animals;
use App\Animal;

class Parrot extends Animal{

    function __construct(){
        parent::__contruct("parrot");
    }

    public function getNoise():String{
        return "coco";
    }
}