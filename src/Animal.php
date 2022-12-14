<?php

namespace App;

abstract class Animal{

    private String $name;

//constructeur
    function __construct($name){
        $this->name= $name;
    }

//getter
    public function getName():string{
        return $this->name;
    }

    
    abstract protected function getNoise():String;

    //abstrait le code aux autres dev, pratique courante en php
    public function noise():string{

        return $this->getNoise();
    }

}

?>