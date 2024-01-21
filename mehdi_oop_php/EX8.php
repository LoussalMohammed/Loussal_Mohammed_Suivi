<?php

class Personne
{
    private $nom;
    private $age;
    private $genre;

    public function __construct($nom, $age, $genre)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->genre = $genre;
    }

    public function __toString()
    {
        return "Personne: {$this->genre} {$this->age} {$this->nom}";
    }
}

$personne = new Personne("home", 24, "mehdi");
echo $personne;


