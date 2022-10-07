<?php
namespace App;
use App\Animal;
use App\Animals\Elephant;

class Enclosure{
    
    private array $animals;

    public function __construct(){
        $animals = array();
    }

    public function addAnimal(animal $animal){
        $this->animals[]=$animal;//empile à la fin de l'array
        //ou $animals.=$animal;
    }

    public function toString(){
        /* @var $animal Animal */
        foreach( $this->animals as $animal){
            
            if($animal instanceof Elephant ){
                echo "look ! It's an :".$animal->getName()."\n"."!";
                echo $animal->getNoise();
            }else{
                echo "look ! It's a :".$animal->getName()."\n"."!";
                echo $animal->getNoise();
            }
        }
    }
}
?>