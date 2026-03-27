<?php

/*
===========================================
PHP TUTORIAL 03
Viditelnost (public, private, protected)
===========================================

Cíle:
- pochopit rozdíl mezi public, private a protected
- naučit se, proč skrýváme data (zapouzdření)
- zjistit, jak správně přistupovat k vlastnostem
*/


// --------------------------------------------------
// Definice třídy
// --------------------------------------------------

class Person
{
    // Veřejná vlastnost – dostupná odkudkoliv
    public $name;

    // Privátní vlastnost – dostupná pouze uvnitř třídy
    private $age;

    // Chráněná vlastnost – dostupná v třídě a jejích potomcích
    protected $city;


    // Konstruktor
    public function __construct($name, $age, $city)
    {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
    }


    // Veřejná metoda
    public function introduce()
    {
        return "Jmenuji se " . $this->name;
    }


    // Getter – umožňuje čtení private vlastnosti
    public function getAge()
    {
        return $this->age;
    }


    // Setter – umožňuje změnu private vlastnosti
    public function setAge($age)
    {
        $this->age = $age;
    }


    // Metoda pro výpis města (protected vlastnost)
    public function getCity()
    {
        return $this->city;
    }
}


// --------------------------------------------------
// Vytvoření objektu
// --------------------------------------------------

$person = new Person("Jan", 18, "Praha");


// --------------------------------------------------
// Přístup k vlastnostem
// --------------------------------------------------

// public – funguje přímo
echo $person->name;

echo "<br>";

// private – toto NEFUNGUJE (způsobí chybu)
// echo $person->age;

// správný přístup přes metodu (getter)
echo $person->getAge();

echo "<br>";

// změna hodnoty přes setter
$person->setAge(19);
echo $person->getAge();

echo "<br>";

// protected – také nelze přímo (bez dědičnosti)
// echo $person->city;

// přístup přes metodu
echo $person->getCity();

