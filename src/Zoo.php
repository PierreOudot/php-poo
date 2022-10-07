<?php
namespace App;
use App\Enclosure;
use App\Animals\{BubbleFish,CatFish,Fish,ClownFish,Whale,
    Dove,Elephant,Parrot,Zebra};
use App\Interfaces\{CanSwim,CanFly,CanWalk};

class Zoo{

    private ?Enclosure $aquarium = null;
    private ?Enclosure $aviary = null;
    private ?Enclosure $fence = null;

    public function __construct(){}

    public function getAquarium():Enclosure{
        return $this->aquarium;
    }

    public function getAviary():Enclosure{
        return $this->aviary;
    }

    public function getFence():Enclosure{
        return $this->fence;
    }

    /* @var $animal Animal */
    public function addAnimal($animal){
        if($animal instanceof CanSwim && $this->aquarium==null){
            $this->aquarium = new Enclosure();
        }else if($animal instanceof CanFly && $this->aviary==null){
            $this->aviary = new Enclosure();
        }else if($animal instanceof CanWalk && $this->fence==null){
            $this->fence = new Enclosure();
        }

        switch(true){
            case $animal instanceof CanSwim:
                $this->aquarium->addAnimal($animal);
                break;
            case $animal instanceof CanFly:
                $this->aviary->addAnimal($animal);
                break;
            case $animal instanceof CanWalk:
                $this->fence->addAnimal($animal);
                break;
            default:
                echo "On ne met que des animaux dans les enclos";
                break;
        }
    }

    function visitTheZoo(){
        if($this->aquarium == null){

        }
    }


    




}
?>