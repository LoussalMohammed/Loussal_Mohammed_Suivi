<?php

interface Travaillable{
    function travailler();
}

class Personne implements Travaillable {
    function travailler(){
        echo "m working";
    }
}


$personne = new Personne();

$personne->travailler();
