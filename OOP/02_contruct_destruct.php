<?php

/*
===========================================
PHP TUTORIAL 02
Konstruktor a destruktor
===========================================

Cíle:
- pochopit význam konstruktoru (__construct)
- naučit se inicializovat objekt při jeho vytvoření
- seznámit se s destruktorem (__destruct)
- porozumět životnímu cyklu objektu
*/


// --------------------------------------------------
// Definice třídy
// --------------------------------------------------

class Person
{
    public $name;
    public $age;

    // Konstruktor
    // Automaticky se zavolá při vytvoření objektu
    public function __construct($name, $age)
    {
        echo "Vytvářím objekt osoby...<br>";

        // Inicializace vlastností
        $this->name = $name;
        $this->age = $age;
    }

    // Metoda
    public function introduce()
    {
        return "Ahoj, jmenuji se " . $this->name . " a je mi " . $this->age . " let.";
    }

    // Destruktor
    // Automaticky se zavolá při zániku objektu (např. na konci skriptu)
    public function __destruct()
    {
        echo "<br>Objekt osoby " . $this->name . " byl zrušen.";
    }
}


// --------------------------------------------------
// Vytvoření objektů
// --------------------------------------------------

// Při vytvoření objektu se automaticky volá konstruktor
$person1 = new Person("Jan", 18);

echo $person1->introduce();

echo "<br><br>";

$person2 = new Person("Eva", 20);

echo $person2->introduce();


// --------------------------------------------------
// Konec skriptu → volají se destruktory
// --------------------------------------------------

