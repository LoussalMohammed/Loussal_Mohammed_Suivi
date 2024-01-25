<?php

class Adresse
{
    private $rue;
    private $ville;
    private $pays;

    public function __construct($rue, $ville, $pays)
    {
        $this->rue = $rue;
        $this->ville = $ville;
        $this->pays = $pays;
    }

    public function obtenirAdresseComplete()
    {
        return $this->rue . ' / ' . $this->ville . ' / ' . $this->pays;
    }
}

// Classe Personne
class Personne
{
    private $nom;
    private $age;
    private $genre;
    private $adresse;

    public function __construct($nom, $age, $genre, $adresse)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->genre = $genre;
        $this->adresse = $adresse;
    }

    public function obtenirInformations()
    {
        return $this->nom . ' ' . $this->age . ' ' . $this->genre . ' habite à l\'adresse : ' . $this->adresse->obtenirAdresseComplete();
    }
}

$adressePersonne = new Adresse('2 Rue de Ijannane', 'SAFI', 'MAROC');
$personne = new Personne('mehdi', 24, 'homme', $adressePersonne);

echo $personne->obtenirInformations();



