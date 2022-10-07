<?php
//namespace auquel le fichier appartient src\sous-dossier
namespace App\Animals;

//source de la classe mère
use App\Animal;

class BubbleFish extends Animal{

    function __construct(){
        parent::__contruct("bubblefish");
    }

    public function getNoise():String{
        return "bloubloublou";
    }
}