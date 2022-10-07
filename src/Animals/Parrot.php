<?php

namespace App\Animals;
use App\Animal;

class Parrot extends Animal{

    function __construct(){
        parent::__construct("parrot");
    }

    public function getNoise():String{
        return "coco";
    }
}