<?php
$utenti=[
    ["name"=>"Rosy","surname"=>"Russo","gender"=>"femmina"],

   ["name"=>"Francesco","surname"=>"Conigliaro","gender"=>"maschio"],

   ["name"=>"Helena","surname"=>"Tocco","gender"=>"femmina"]
];
 foreach($utenti as $utente){
 if($utente["gender"]=="maschio"){
    echo "buongiorno signor " . $utente['name'] ." " . $utente["surname"] . "\n";
 }else {
    echo "Buongiorno Signora " . $utente['name'] . " " . $utente["surname"] . "\n";
}
}

