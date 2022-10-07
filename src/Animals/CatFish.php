<?php

namespace App\Animals;
use App\Animal;
use App\Interfaces\CanSwim;

class CatFish extends Animal implements CanSwim{

    function __construct(){
        parent::__construct("catFish");
    }

    public function getNoise():String{
        return "bloubloublou";
    }
}
?>