<?php

namespace App\Animals;
use App\Animal;

class Zebra extends Animal{

    function __construct(){
        parent::__construct("zebra");
    }

    public function getNoise():String{
        return "hiiiii";
    }
}