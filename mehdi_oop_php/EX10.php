<?php


// Définition du trait Journal
trait Journal
{
    public function journaliser($message)
    {
        echo "[" . date("Y-m-d H:i:s") . "] " . $message . "<br>";
    }
}

class Personne
{
    use Journal;

    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function presenter()
    {
        $this->journaliser("Je suis " . $this->nom);
    }
}

class Etudiant
{
    use Journal;

    protected $nom;
    protected $matricule;

    public function __construct($nom, $matricule)
    {
        $this->nom = $nom;
        $this->matricule = $matricule;
    }

    public function presenter()
    {
        $this->journaliser("Je suis l'étudiant " . $this->nom . " avec le matricule " . $this->matricule);
    }
}

$personne = new Personne("elmehdi_elfari");
$personne->presenter();

$etudiant = new Etudiant("achraf_assad", "123456");
$etudiant->presenter();

