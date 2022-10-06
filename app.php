<?php
//importer l'autoloader
require __DIR__ . '/vendor/autoload.php';

//definir les sources des classes, cf composer.json
use App\Animals\{BubbleFish,CatFish,Fish,ClownFish,Whale,
Dove,Elephant,Parrot,Zebra};






$animals= array();

for($i=0; $i<5;$i++){
    $animals[]=new Fish();
}

for($i=0; $i<3;$i++){
    $animals[]=new BubbleFish();
}

for($i=0; $i<2;$i++){
    $animals[]=new CatFish();
}

for($i=0; $i<2;$i++){
    $animals[]=new CatFish();
}



?>