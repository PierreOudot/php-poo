<?php

namespace App;

abstract class Animal{

    private String $name;

//constructeur
    function __contruct($name){
        $this->name= $name;
    }

//getter
    public function getName():string{
        return $this->name;
    }

    abstract protected function getNoise():String;

    public function noise():string{

        return $this->getNoise();
    }

}

?>