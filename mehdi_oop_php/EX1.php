<?php

class Personne {
    public $nom;
    public $age;
    public $genre;

    public function __construct($nom,$age,$genre) {
        $this->nom =$nom;
        $this->age =$age;
        $this->genre =$genre;
    }
}

$pre = new Personne('mehdi',24,'home');

echo "Name: ".$pre->nom."<br>";
echo "Age: ".$pre->age."<br>";
echo "Genre: ".$pre->genre;
