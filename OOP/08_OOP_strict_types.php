<?php

/*
===========================================
PHP TUTORIAL 08
OOP a strict types
===========================================

Cíle:
- pochopit význam strict_types
- naučit se používat typy parametrů
- naučit se používat návratové typy
- pochopit rozdíl mezi slabým a striktním typováním
*/


// Zapnutí striktního typování
declare(strict_types=1);


// --------------------------------------------------
// Definice třídy
// --------------------------------------------------

class Calculator
{
    // Metoda s typy parametrů a návratovou hodnotou
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function divide(float $a, float $b): float
    {
        if ($b === 0.0) {
            throw new Exception("Dělení nulou!");
        }

        return $a / $b;
    }
}


// --------------------------------------------------
// Použití
// --------------------------------------------------

$calc = new Calculator();

// Správné použití
echo $calc->add(5, 3);

echo "<br>";

// Chyba při strict_types
// echo $calc->add("5", "3"); // ❌ TypeError

echo "<br>";

echo $calc->divide(10, 2);


// --------------------------------------------------
// Ukázka rozdílu bez strict_types
// --------------------------------------------------

// Pokud bychom NEMĚLI strict_types:
// PHP by automaticky převedlo "5" na 5
// → může vést k chybám

