<?php

class Personne{

    public $nom;
    public $age;
    public $genre;

    function __construct($nom, $age, $genre){

        $this->nom = $nom;
        $this->age = $age;
        $this->genre = $genre;

    }

    function Presenter(){
        echo "Bonjour, je m'appelle  $this->nom , j'ai $this->age , genre:$this->genre" ;
    }

}


$nom = "maryam";
$age = 20;
$genre = "feminin";

$personne = new Personne($nom, $age, $genre);
$personne->Presenter();

?>