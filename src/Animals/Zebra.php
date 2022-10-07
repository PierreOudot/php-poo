<?php

namespace App\Animals;
use App\Animal;

class Zebra extends Animal{

    function __construct(){
        parent::__contruct("zebra");
    }

    public function getNoise():String{
        return "hiiiii";
    }
}