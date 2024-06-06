/*
Data questo semplice schema di classificazione animale

Immagine caricata dall’utente: image-20230508-182600.png



Crea una struttura a classi sfruttando l’ereditarieta' e seguendo queste semplici regole: 

-le classi non devono avere attributi;

- ogni classe avra' un metodo specifico protected per stampare la sua specializzazione;

- non puoi realizzare metodi definiti public per stampare il risultato;

- l’unico metodo public ammesso e' il costrutture. Il risultato atteso sara':



$magikarp = new Fish();

Nel terminale visaulizzerete:
Sono un animale Vertebrato
Sono un animale a Sangue Freddo
Splash!
*/ 

<?php

class Animal {
    protected function printSpecialization() {
        echo "Sono un animale";
    }

    public function __construct() {
        $this->printSpecialization();
    }
}

class Vertebrate extends Animal {
    protected function printSpecialization() {
        parent::printSpecialization();
        echo "\nSono un animale Vertebrato";
    }
}

class WarmBlooded extends Vertebrate {
    protected function printSpecialization() {
        parent::printSpecialization();
        echo "\nSono un animale a Sangue Caldo";
    }
}

class Mammal extends WarmBlooded {
    protected function printSpecialization() {
        parent::printSpecialization();
        echo "\n verso leone!";
    }
}

class Bird extends WarmBlooded {
    protected function printSpecialization() {
        parent::printSpecialization();
        echo "\n cinguettio!";
    }
}

class ColdBlooded extends Vertebrate {
    protected function printSpecialization() {
        parent::printSpecialization();
        echo "\nSono un animale a Sangue Freddo";
    }
}

class Fish extends ColdBlooded {
    protected function printSpecialization() {
        parent::printSpecialization();
        echo "\nSplash!";
    }
}

class Reptile extends ColdBlooded {
    protected function printSpecialization() {
        parent::printSpecialization();
        echo "\n verso serpente!";
    }
}

class Amphibian extends ColdBlooded {
    protected function printSpecialization() {
        parent::printSpecialization();
        echo "\n verso anfibio!";
    }
}

$magikarp = new Fish();
