<?php

class Person
{
    private $nom;
    private $age;
    private $genre;

    function getNom()
    {
        return $this->nom;
    }

    function setNom($nom)
    {
        $this->nom = $nom;
    }

    function getAge()
    {
        return $this->age;
    }

    function setAge($age)
    {
        $this->age = $age;
    }

    function getGenre()
    {
        return $this->genre;
    }

    function setGenre($genre)
    {
        $this->genre = $genre;
    }
}

$pre = new Person();
$pre->setNom("mehdi");
$pre->setAge("24");
$pre->setGenre("homme");

echo "Name :" . $pre->getNom() . "<br>";
echo "Age :" . $pre->getAge() . "<br>";
echo "Genre :" . $pre->getGenre() . "<br>";
