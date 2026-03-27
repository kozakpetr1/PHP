<?php

/*
===========================================
PHP TUTORIAL 06
Základní magické metody
===========================================

Cíle:
- pochopit, co jsou magické metody
- naučit se používat __toString()
- seznámit se s __get() a __set()
- pochopit automatické volání těchto metod
*/


// --------------------------------------------------
// Definice třídy
// --------------------------------------------------

class Person
{
    private $name;
    private $age;


    // Konstruktor
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    // --------------------------------------------------
    // Magická metoda __toString()
    // --------------------------------------------------
    // Automaticky se zavolá při převodu objektu na text

    public function __toString()
    {
        return $this->name . " (" . $this->age . " let)";
    }


    // --------------------------------------------------
    // Magická metoda __get()
    // --------------------------------------------------
    // Volá se při pokusu o čtení nepřístupné vlastnosti

    public function __get($property)
    {
        echo "Čtu nepřístupnou vlastnost: $property<br>";

        if ($property === "name") {
            return $this->name;
        }

        if ($property === "age") {
            return $this->age;
        }

        return null;
    }


    // --------------------------------------------------
    // Magická metoda __set()
    // --------------------------------------------------
    // Volá se při pokusu o zápis do nepřístupné vlastnosti

    public function __set($property, $value)
    {
        echo "Zapisuji do nepřístupné vlastnosti: $property<br>";

        if ($property === "age" && $value >= 0) {
            $this->age = $value;
        }
    }
}


// --------------------------------------------------
// Vytvoření objektu
// --------------------------------------------------

$person = new Person("Jan", 18);


// --------------------------------------------------
// __toString()
// --------------------------------------------------

// Automatický převod objektu na text
echo $person;

echo "<br><br>";


// --------------------------------------------------
// __get()
// --------------------------------------------------

// Přístup k private vlastnosti → spustí __get()
echo $person->name;

echo "<br>";


// --------------------------------------------------
// __set()
// --------------------------------------------------

// Zápis do private vlastnosti → spustí __set()
$person->age = 25;

echo $person;

