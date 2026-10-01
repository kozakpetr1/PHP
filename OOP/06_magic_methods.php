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
    private $sex;
    private $email;
    private $cell_phone;
    // Konstruktor
    public function __construct($name, $age, $sex = null, $email = null, $cell_phone = null)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->email = $email;
        $this->cell_phone = $cell_phone;
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
        echo "Čtu nepřístupnou vlastnost: $property\n";

        if ($property === "name") {
            return $this->name;
        }

        if ($property === "age") {
            return $this->age;
        }

        if ($property === "sex") {
            return $this->sex;
        }

        if ($property === "email") {
            return $this->email;
        }
        if ($property === "cell_phone") {
            return $this->cell_phone;
        }

        return null;
    }


    // --------------------------------------------------
    // Magická metoda __set()
    // --------------------------------------------------
    // Volá se při pokusu o zápis do nepřístupné vlastnosti

    public function __set($property, $value)
    {
        echo "Zapisuji do nepřístupné vlastnosti: $property\n";

        if ($property === "age" && $value >= 0) {
            $this->age = $value;
        }

        if ($property === "sex" && ($value === "M" || $value === "F")) {
            $this->sex = $value;
        }

        if ($property === 'email') {
            $this->email = filter_var($value, FILTER_VALIDATE_EMAIL) ?: null;
        }

        if ($property === 'cell_phone') {
            $normalized = preg_replace('/[\s\-]/', '', $value);
            $this->cell_phone = preg_match('/^\+?[1-9]\d{6,14}$/', $normalized) ? $normalized : null;
        }
    }
}


// --------------------------------------------------
// Vytvoření objektu
// --------------------------------------------------

$person = new Person("Jan", 18, "M");


// --------------------------------------------------
// __toString()
// --------------------------------------------------

// Automatický převod objektu na text
echo $person;

echo "\n\n";


// --------------------------------------------------
// __get()
// --------------------------------------------------

// Přístup k private vlastnosti → spustí __get()
echo $person->name;

echo "\n";

echo $person->sex;

echo "\n";

// --------------------------------------------------
// __set()
// --------------------------------------------------

// Zápis do private vlastnosti → spustí __set()
$person->age = 25;
$person->age = -5; // neplatná hodnota, nebude změněna
$person->sex = "M";
$person->email = "jan@seznam.cz";
$person->cell_phone = "+420 123 456 789";

echo $person . "\n";
echo "Email: " . $person->email . "\n";
echo "Telefon: " . $person->cell_phone . "\n";

