<?php

abstract class Forme
{
    abstract public function calculerSurface();
}

class Cercle extends Forme
{
    private $rayon;

    public function __construct($rayon)
    {
        $this->rayon = $rayon;
    }

    public function calculerSurface()
    {
        return pi() * pow($this->rayon, 2);
    }
}

class Rectangle extends Forme
{
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function calculerSurface()
    {
        return $this->longueur * $this->largeur;
    }
}

$cercle = new Cercle(5);
$rectangle = new Rectangle(4, 6);

echo "Surface du cercle : " . $cercle->calculerSurface() . "<br>";
echo "Surface du rectangle : " . $rectangle->calculerSurface() ;



