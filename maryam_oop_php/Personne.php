<?php

class Personne{

    private $nom;
    private $age;
    private $genre;

    function __getNom($nom){
        return $this->nom;
    }
    function __getAge($age){
        return $this->age;
    }
    function __getGenre($genre){
        return $this->genre;
    }

    function __setNom($nom, $value){
        $this->nom = $value;
    }
    function __setAge($age, $value){
        $this->age = $value;
    }
    function __setGenre($genre, $value){
        $this->genre = $value;
    }

}
//class Etudiant extends Personne {
//
//    public $identifiantEtudiant;
//
//    function __construct($nom, $age, $genre, $identifiantEtudiant)
//    {
//        parent::__construct($nom, $age, $genre);
//        $this->identifiantEtudiant = $identifiantEtudiant;
//    }
//
//
//    function Present(){
//        echo "Bonjour, je m'appelle  $this->nom , j'ai $this->age , genre:$this->genre, id: $this->identifiantEtudiant" ;
//
//    }
//}

$nom = "maryam";
$age = 20;
$genre = "feminin";

$personne = new Personne();

$personne->__setNom($nom, $nom);
$personne->__setAge($age, $age);
$personne->__setGenre($genre, $genre);

echo "Bonjour,  ";
echo "je m'appelle " . $personne->__getNom($nom) . " , ";
echo "j'ai " . $personne->__getAge($age) . " ans , ";
echo "le genre : " . $personne->__getGenre($genre) . " . ";


