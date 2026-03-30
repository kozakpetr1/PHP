<?php

/*
===========================================
PHP TUTORIAL 04
Statické prvky (static)
===========================================

Cíle:
- pochopit rozdíl mezi běžnou a statickou vlastností
- naučit se používat static
- pochopit rozdíl mezi objektem a třídou
- naučit se používat self::
*/


// --------------------------------------------------
// Definice třídy
// --------------------------------------------------

class Counter
{
    // Statická vlastnost – sdílená pro všechny objekty
    public static $count = 0;


    // Konstruktor
    public function __construct()
    {
        // Každé vytvoření objektu zvýší počítadlo
        self::$count++; // inkrementace statické vlastnosti, self:: odkazuje na aktuální třídu
    }

    // Destruktor
    public function __destruct()
    {
        // Každé zrušení objektu sníží počítadlo
        self::$count--; // dekrementace statické vlastnosti, self:: odkazuje na aktuální třídu
    }

    // Statická metoda
    public static function getCount()
    {
        return "Počet existujících objektů: " . self::$count;
    }
}


// --------------------------------------------------
// Vytváření objektů
// --------------------------------------------------

$obj1 = new Counter();
$obj2 = new Counter();
$obj3 = new Counter();


// --------------------------------------------------
// Práce se statickými prvky
// --------------------------------------------------

// Statická metoda se volá přes název třídy
echo Counter::getCount();

unset($obj2); // Zrušení jednoho objektu

echo Counter::getCount();

echo "<br>";

// Přístup ke statické vlastnosti
echo Counter::$count;

// Statické prvky jsou sdílené – všechny objekty vidí stejnou hodnotu