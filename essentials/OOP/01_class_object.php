<?php

/*
===========================================
PHP TUTORIAL 01
Třídy a objekty (OOP základy)
===========================================

Cíle:
- pochopit, co je třída a objekt
- naučit se definovat jednoduchou třídu
- vytvořit instanci (objekt)
- pracovat s vlastnostmi a metodami
- porozumět použití $this
*/


// --------------------------------------------------
// Definice třídy (class)
// --------------------------------------------------

// Třída je šablona pro vytváření objektů
class Person
{
    // Vlastnosti (atributy)
    // public = přístupné odkudkoliv
    public $name;
    public $age;

    // Metoda (funkce uvnitř třídy)
    public function introduce()
    {
        // $this odkazuje na aktuální objekt
        return "Ahoj, jmenuji se " . $this->name . " a je mi " . $this->age . " let.";
    }
}


// --------------------------------------------------
// Vytvoření objektu (instance třídy)
// --------------------------------------------------

// Pomocí klíčového slova 'new' vytvoříme objekt
$person1 = new Person();

// Nastavení hodnot vlastností objektu
$person1->name = "Jan";
$person1->age = 18;

// Volání metody objektu
echo $person1->introduce();

echo "<br>";


// --------------------------------------------------
// Vytvoření dalšího objektu
// --------------------------------------------------

$person2 = new Person();

$person2->name = "Eva";
$person2->age = 20;

// Každý objekt má vlastní data
echo $person2->introduce();
