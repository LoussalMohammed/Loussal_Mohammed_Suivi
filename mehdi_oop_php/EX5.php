<?php

class Person {
    private $nom;
    private $age;
    private $genre;

    function getNom(){
        return $this->nom;
    }

    function setNom($nom){
        $this->nom = $nom;
    }

    function getAge(){
        return $this->age;
    }

    function setAge($age){
        $this->age = $age;
    }

    function getGenre(){
        return $this->genre;
    }

    function setGenre($genre){
        $this->genre = $genre;
    }

    static function obtenirAgeRetraite(){
        global $R_age;
        if ($R_age == 65) {
            echo "Age de Retraite :".$R_age;
        }
    }

    function __construct($nom, $age, $genre){
        $this->nom = $nom;
        $this->age = $age;
        $this->genre = $genre;
    }
}

interface Travaillable {
    public function travailler();
}

class Employee extends Person implements Travaillable {
    function travailler(){
        echo $this->getNom() . " travaille.<br>";
    }
}

$pre = new Employee("mehdi", 24, "homme");
$pre->obtenirAgeRetraite(); // Assuming you want to call the static method
echo "Name: " . $pre->getNom() . "<br>";
echo "Age: " . $pre->getAge() . "<br>";
echo "Genre: " . $pre->getGenre() . "<br>";
$pre->travailler();
