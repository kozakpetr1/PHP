<?php
/*
===========================================
PHP TUTORIAL 03
Strict Types v PHP
===========================================
Tento skript ukazuje rozdíl mezi běžným (slabým) typováním PHP
a přísnou kontrolou typů pomocí direktivy strict_types.

Pokud je strict_types zapnutý, PHP NEPROVÁDÍ automatické převody
typů při volání funkcí.
*/

declare(strict_types=1);


/**
 * Funkce pro součet dvou čísel
 * Parametry musí být typu int
 * Funkce vrací int
 */
function add(int $a, int $b): int
{
    return $a + $b;
}


/**
 * Funkce pro výpočet ceny s DPH
 * Parametr musí být float
 * Funkce vrací float
 */
function calculateVAT(float $price): float
{
    return $price * 1.21;
}


/**
 * Ukázka správného použití
 */

echo "Správné použití:\n";

$result = add(5, 10);
echo "Součet: $result\n";

$price = calculateVAT(100.0);
echo "Cena s DPH: $price\n";


/**
 * Ukázka chybného použití
 * 
 * Pokud odkomentujete následující řádky,
 * PHP vyhodí TypeError.
 */

// $result = add("5", "10");
// echo $result;

// $price = calculateVAT("100");
// echo $price;


/**
 * Poznámka:
 * Bez direktivy
 *
 * declare(strict_types=1);
 *
 * by PHP automaticky převedlo řetězce "5" a "10"
 * na čísla a program by proběhl bez chyby.
 */