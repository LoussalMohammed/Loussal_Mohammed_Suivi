<?php

abstract class Forme{
    abstract function calculerSurface();
}

class Cercle extends Forme {
    const pi = 3.14;
    private $rayon;

    function __get($name){
        return "Rayon = ". $this->rayon;
    }

    function __set($name, $value){
        $this->rayon = $value;
    }

    function calculerSurface(){
        $surfcace = self::pi * $this->rayon * $this->rayon;
        return "La surface du cercle est : " . $surfcace . " m².";
    }

}

$cercle = new Cercle();

$rayon = 7.5;

$cercle->__set($rayon, $rayon);

echo $cercle->__get($rayon);
echo "<br>";
echo $cercle->calculerSurface();
echo "<br> <br>";


class Rectangle extends Forme {
    private $longueur;
    private $largeur;

    function __getRec(){
        return ("Longueur = ". $this->longueur . "<br>". "Largeur = ". $this->largeur);
    }

    function __set($longueur, $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    function calculerSurface(){
        $surface = $this->largeur * $this->longueur;
        echo "La surface du rectangle est : ". $surface ." m².";
    }
}

$rectangle = new Rectangle();

$longueur = 12;
$largeur = 9;
$rectangle->__set($largeur, $longueur);
//echo $rectangle->__getLargeur();
echo $rectangle->__getRec();
echo "<br>";
$rectangle->calculerSurface();
