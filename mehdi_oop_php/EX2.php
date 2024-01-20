<?php

class Personne {
    public $nom;
    public $age;
    public $genre;

    public function __construct($nom, $age, $genre) {
        $this->nom = $nom;
        $this->age = $age;
        $this->genre = $genre;
    }
}

class Etudiant extends Personne {
    public $identifiantEtudiant;

    public function __construct($identifiantEtudiant, $nom, $age, $genre) {
        parent::__construct($nom, $age, $genre);
        $this->identifiantEtudiant = $identifiantEtudiant;
    }
}

$per = new Etudiant(1, "mehdi", 24, "home");

echo "ID :".$per->identifiantEtudiant."<br>";
echo "NAME :".$per->nom."<br>";
echo "Age :".$per->age."<br>";
echo "Genre :".$per->genre;

