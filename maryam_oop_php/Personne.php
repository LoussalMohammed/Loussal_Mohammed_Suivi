<?php

class Personne{

    protected $nom;
    protected $age;
    protected $genre;

    function __construct($nom, $age, $genre){

        $this->nom = $nom;
        $this->age = $age;
        $this->genre = $genre;

    }

    function Presenter(){
        echo "Bonjour, je m'appelle  $this->nom , j'ai $this->age , genre:$this->genre" ;
    }

}

class Etudiant extends Personne {

    public $identifiantEtudiant;

    function __construct($nom, $age, $genre, $identifiantEtudiant)
    {
        parent::__construct($nom, $age, $genre);
        $this->identifiantEtudiant = $identifiantEtudiant;
    }


    function Present(){
        echo "Bonjour, je m'appelle  $this->nom , j'ai $this->age , genre:$this->genre, id: $this->identifiantEtudiant" ;

    }
}

$identifiantEtudiant = 1;
$nom = "maryam";
$age = 20;
$genre = "feminin";

//$personne = new Personne($nom, $age, $genre);
//$personne->Presenter();

$etudiant = new  Etudiant($nom, $age, $genre, $identifiantEtudiant);
$etudiant->Present();

?>