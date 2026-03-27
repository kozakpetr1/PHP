<?php

/*
===========================================
PHP TUTORIAL 05
Gettery a settery
===========================================

Cíle:
- pochopit princip zapouzdření (encapsulation)
- naučit se používat private vlastnosti
- vytvořit getter (čtení hodnoty)
- vytvořit setter (změna hodnoty)
- validovat vstupní data
*/


// --------------------------------------------------
// Definice třídy
// --------------------------------------------------

class Person
{
    // Data jsou skrytá (private)
    private $name;
    private $age;


    // Konstruktor
    public function __construct($name, $age)
    {
        // Použijeme settery (dobrá praxe)
        $this->setName($name);
        $this->setAge($age);
    }


    // --------------------------------------------------
    // Getter – vrací hodnotu
    // --------------------------------------------------

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }


    // --------------------------------------------------
    // Setter – nastavuje hodnotu + kontrola dat
    // --------------------------------------------------

    public function setName($name)
    {
        // Kontrola – jméno nesmí být prázdné
        if (empty($name)) {
            echo "Chyba: jméno nesmí být prázdné.<br>";
            return;
        }

        $this->name = $name;
    }

    public function setAge($age)
    {
        // Kontrola – věk musí být kladné číslo
        if ($age < 0) {
            echo "Chyba: věk nemůže být záporný.<br>";
            return;
        }

        $this->age = $age;
    }


    // --------------------------------------------------
    // Metoda pro výpis
    // --------------------------------------------------

    public function introduce()
    {
        return "Jmenuji se " . $this->name . " a je mi " . $this->age . " let.";
    }
}


// --------------------------------------------------
// Vytvoření objektu
// --------------------------------------------------

$person = new Person("Jan", 18);


// --------------------------------------------------
// Použití getterů
// --------------------------------------------------

echo $person->getName();
echo "<br>";
echo $person->getAge();

echo "<br><br>";


// --------------------------------------------------
// Použití setterů
// --------------------------------------------------

$person->setAge(25);
echo $person->getAge();

echo "<br>";

// Pokus o neplatnou hodnotu
$person->setAge(-5);

echo "<br>";

// Výpis celé informace
echo $person->introduce();

?>