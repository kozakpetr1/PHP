<?php

/*
===========================================
PHP TUTORIAL 05
Funkce, vstupní parametry a návratové hodnoty
===========================================

Cíle:
- pochopit význam funkcí
- naučit se definovat vlastní funkce
- pracovat se vstupními parametry
- používat návratové hodnoty
*/

echo "<h1>PHP Tutorial 05 - Funkce</h1>";

/*
-------------------------------------------
1. CO JE FUNKCE
-------------------------------------------

Funkce je blok kódu, který:
- má své jméno
- může přijímat parametry
- může vracet hodnotu

Výhodou funkcí je:
- přehlednější kód
- znovupoužitelnost
*/

echo "<h2>1. Jednoduchá funkce</h2>";

function sayHello()
{
    echo "Dobrý den!<br>";
}

sayHello();



/*
-------------------------------------------
2. FUNKCE S PARAMETREM
-------------------------------------------

Parametr umožňuje funkci předat hodnotu.
*/

echo "<h2>2. Funkce s parametrem</h2>";

function greet($name)
{
    echo "Dobrý den, $name!<br>";
}

greet("Petře");
greet("Jano");



/*
-------------------------------------------
3. VÍCE PARAMETRŮ
-------------------------------------------
*/

echo "<h2>3. Funkce s více parametry</h2>";

function add($a, $b)
{
    $result = $a + $b;
    echo "Součet je: $result<br>";
}

add(5, 3);
add(10, 20);



/*
-------------------------------------------
4. NÁVRATOVÁ HODNOTA
-------------------------------------------

Funkce může vrátit hodnotu pomocí return.
*/

echo "<h2>4. Návratová hodnota</h2>";

function multiply($a, $b)
{
    return $a * $b;
}

$result = multiply(4, 6);

echo "Výsledek násobení: $result<br>";



/*
-------------------------------------------
5. FUNKCE S TYPOVANÝMI PARAMETRY
-------------------------------------------

Typ parametrů lze deklarovat.
*/

echo "<h2>5. Typované parametry</h2>";

function subtract(int $a, int $b)
{
    return $a - $b;
}

echo subtract(10, 3) . "<br>";



/*
-------------------------------------------
6. NÁVRATOVÝ TYP FUNKCE
-------------------------------------------

Funkce může deklarovat typ návratové hodnoty.
*/

echo "<h2>6. Návratový typ</h2>";

function calculateSquare(float $number): float
{
    return $number * $number;
}

echo calculateSquare(4) . "<br>";



/*
-------------------------------------------
7. VÝCHOZÍ HODNOTA PARAMETRU
-------------------------------------------

Parametr může mít výchozí hodnotu.
*/

echo "<h2>7. Výchozí hodnota parametru</h2>";

function welcome($name = "host")
{
    echo "Vítejte, $name!<br>";
}

welcome("Petře");
welcome();



/*
-------------------------------------------
8. PARAMETR PŘEDANÝ REFERENCÍ
-------------------------------------------

Pomocí znaku & lze změnit hodnotu proměnné
mimo funkci.
*/

echo "<h2>8. Parametr předaný referencí</h2>";

function increase(&$number)
{
    $number++;
}

$value = 10;

increase($value);

echo "Nová hodnota: $value<br>";



/*
-------------------------------------------
9. FUNKCE VRACEJÍCÍ POLE
-------------------------------------------
*/

echo "<h2>9. Funkce vracející pole</h2>";

function getUser()
{
    return [
        "name" => "Petr",
        "role" => "teacher"
    ];
}

$user = getUser();

echo "Jméno: " . $user["name"] . "<br>";
echo "Role: " . $user["role"] . "<br>";



/*
-------------------------------------------
10. PRAKTICKÝ PŘÍKLAD
-------------------------------------------

Výpočet BMI.
*/

echo "<h2>10. Praktický příklad</h2>";

function calculateBMI(float $weight, float $height): float
{
    return $weight / ($height * $height);
}

$bmi = calculateBMI(80, 1.8);

echo "BMI: " . $bmi . "<br>";



/*
-------------------------------------------
SHRNUTÍ
-------------------------------------------

Funkce:
- jsou znovupoužitelné bloky kódu

Parametry:
- umožňují předat funkci hodnoty

return:
- vrací hodnotu z funkce

Další vlastnosti:
- typované parametry
- návratové typy
- výchozí hodnoty parametrů
- předávání referencí
*/

echo "<h2>Konec ukázky</h2>";

?>