<?php

class Personne {
    private $nom;
    private $age;
    private $genre;

    public function __construct($nom, $age, $genre) {
        $this->nom = $nom;
        $this->age =$age;
        $this->genre = $genre;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGenre() {
        return $this->genre;
    }

}

$personne = new Personne("mehdi", 24, "homme");
echo "Nom: " . $personne->getNom() . "<br>";
echo "Age: " . $personne->getAge() . " ans<br>";
echo "Genre: " . $personne->getGenre() . "<br>";
