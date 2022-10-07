<?php
//importer l'autoloader
require __DIR__ . '/vendor/autoload.php';

//definir les sources des classes, cf composer.json
use App\Animals\{BubbleFish,CatFish,Fish,ClownFish,Whale,
Dove,Elephant,Parrot,Zebra};

use App\Interfaces;
use App\Zoo;


// $animals= array();

// for($i=0; $i<5; $i++){
//     $animals[]=new Fish();
// }

// for($i=0; $i<3; $i++){
//     $animals[]=new BubbleFish();
// }

// for($i=0; $i<2; $i++){
//     $animals[]=new CatFish();
// }

// for($i=0; $i<1; $i++){
//     $animals[]=new ClownFish();
// }

// for($i=0; $i<2; $i++){
//     $animals[]=new Elephant();
// }

// for($i=0; $i<1; $i++){
//     $animals[]=new Zebra();
// }

// for($i=0; $i<10; $i++){
//     $animals[]=new Parrot();
// }

// for($i=0; $i<2; $i++){
//     $animals[]=new Dove();
// }

// foreach($animals as $value){
//     echo $value->getName()."\n";
//     echo $value->noise()."\n";
// }

$poisson = new Fish();

$zoo = new Zoo();
$zoo->addAnimal($poisson);


?>