<?php

class Adresse{
    private $rue;
    private $ville;
    private $pays;

    function __construct($rue, $ville, $pays)
    {
        $this->rue = $rue;
        $this->ville = $ville;
        $this->pays = $pays;
    }

    function __toString()
    {
        return "$this->rue, $this->ville, $this->pays";
    }
}

class Personne
{

    private $nom;
    private $age;
    private $genre;

    private $adresse;

    function __construct($nom, Adresse $adresse)
    {

        $this->nom = $nom;
//        $this->age = $age;
//        $this->genre = $genre;
        $this->adresse = $adresse;
    }

    function Presenter()
    {
        echo "Bonjour, je m'appelle  $this->nom  , mon adresse est : $this->adresse";
    }

}

$adresse = new Adresse("110, 03 blodjd", "Safi", "Maroc");

$personne = new Personne("maryam", $adresse);

echo $personne->Presenter();

