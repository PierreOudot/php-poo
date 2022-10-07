<?php
//namespace auquel le fichier appartient src\sous-dossier
namespace App\Animals;

//source de la classe mère
use App\Animal;
use App\Interfaces\CanSwim;

class BubbleFish extends Animal {

    function __construct(){
        parent::__construct("bubblefish");
    }

    public function getNoise():String{
        return "bloubloublou";
    }
}