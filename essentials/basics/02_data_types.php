<?php

/*
===========================================
PHP TUTORIAL 02
Jednoduché a strukturované datové typy
===========================================

Cíle:
- poznat základní datové typy v PHP
- rozlišit jednoduché a strukturované datové typy
- naučit se zjistit typ a obsah proměnné
- pochopit práci s polem jako základním strukturovaným typem
*/

echo "<h1>PHP Tutorial 02 - Datové typy</h1>";

/*
-------------------------------------------
1. JEDNODUCHÉ DATOVÉ TYPY
-------------------------------------------

Mezi jednoduché datové typy budeme v této lekci řadit:
- int      ... celé číslo
- float    ... desetinné číslo
- string   ... textový řetězec
- bool     ... logická hodnota true / false

PHP je dynamicky typovaný jazyk:
- proměnná nemusí mít typ uvedený předem
- typ se určí podle přiřazené hodnoty
*/

echo "<h2>1. Jednoduché datové typy</h2>";

$age = 19;                  // int
$temperature = 21.5;        // float
$name = "Jan Novák";        // string
$isStudent = true;          // bool

echo "Věk: $age <br>";
echo "Teplota: $temperature <br>";
echo "Jméno: $name <br>";
echo "Je student: ";

if ($isStudent) {
    echo "ano <br>";
} else {
    echo "ne <br>";
}

/*
Funkce var_dump() vypíše:
- datový typ
- hodnotu proměnné
*/

echo "<h3>Kontrola typů pomocí var_dump()</h3>";

var_dump($age);
echo "<br>";

var_dump($temperature);
echo "<br>";

var_dump($name);
echo "<br>";

var_dump($isStudent);
echo "<br>";



/*
-------------------------------------------
2. CELÁ ČÍSLA A DESETINNÁ ČÍSLA
-------------------------------------------

int:
- používá se pro celá čísla
- například počet žáků, věk, počet bodů

float:
- používá se pro čísla s desetinnou částí
- například cena, teplota, průměr
*/

echo "<h2>2. Číselné datové typy</h2>";

$points = 87;
$average = 1.75;

echo "Počet bodů: $points <br>";
echo "Průměrná známka: $average <br>";

/*
Pozor:
desetinná čísla se v PHP zapisují s tečkou, ne s čárkou.
*/

$price = 249.90;
echo "Cena: $price Kč <br>";



/*
-------------------------------------------
3. ŘETĚZCE (STRING)
-------------------------------------------

String je text.
Může obsahovat:
- písmena
- číslice
- mezery
- speciální znaky
*/

echo "<h2>3. Řetězec (string)</h2>";

$firstName = "Petra";
$lastName = "Svobodová";

$fullName = $firstName . " " . $lastName;

echo "Jméno a příjmení: " . $fullName . "<br>";

/*
Spojování řetězců se v PHP provádí pomocí tečky.
*/

$message = "Dobrý den, " . $fullName . "!";
echo $message . "<br>";

/*
V dvojitých uvozovkách lze proměnnou zapsat přímo.
*/

echo "Studentka se jmenuje $fullName <br>";



/*
-------------------------------------------
4. LOGICKÝ DATOVÝ TYP (BOOL)
-------------------------------------------

Bool může mít pouze dvě hodnoty:
- true
- false

Používá se například:
- při rozhodování
- v podmínkách
- pro evidenci stavů
*/

echo "<h2>4. Logický datový typ (bool)</h2>";

$isLoggedIn = false;
$hasPermission = true;

echo "Je uživatel přihlášen? ";
var_dump($isLoggedIn);
echo "<br>";

echo "Má uživatel oprávnění? ";
var_dump($hasPermission);
echo "<br>";

if ($hasPermission) {
    echo "Přístup povolen <br>";
} else {
    echo "Přístup zamítnut <br>";
}



/*
-------------------------------------------
5. SPECIÁLNÍ HODNOTA NULL
-------------------------------------------

null znamená:
- proměnná nemá žádnou hodnotu
- hodnota je záměrně prázdná
*/

echo "<h2>5. Speciální hodnota null</h2>";

$middleName = null;

var_dump($middleName);
echo "<br>";



/*
-------------------------------------------
6. STRUKTUROVANÉ DATOVÉ TYPY
-------------------------------------------

Ve školní praxi je nejdůležitější strukturovaný typ:
- array (pole)

Pole umožňuje ukládat více hodnot do jedné proměnné.
*/

echo "<h2>6. Strukturované datové typy - pole</h2>";

$subjects = ["PHP", "Databáze", "Sítě", "Kybernetická bezpečnost"];

echo "První předmět: " . $subjects[0] . "<br>";
echo "Druhý předmět: " . $subjects[1] . "<br>";

/*
Indexy pole začínají od nuly.
*/

echo "<h3>Výpis celého pole</h3>";
echo "<pre>";
print_r($subjects);
echo "</pre>";



/*
-------------------------------------------
7. ASOCIATIVNÍ POLE
-------------------------------------------

Asociativní pole nepoužívá číselné indexy,
ale vlastní klíče.

To je praktické například pro evidenci údajů o žákovi.
*/

echo "<h2>7. Asociativní pole</h2>";

$student = [
    "first_name" => "Karel",
    "last_name" => "Dvořák",
    "age" => 18,
    "class" => "4.IT"
];

echo "Jméno: " . $student["first_name"] . "<br>";
echo "Příjmení: " . $student["last_name"] . "<br>";
echo "Věk: " . $student["age"] . "<br>";
echo "Třída: " . $student["class"] . "<br>";

echo "<h3>Výpis asociativního pole</h3>";
echo "<pre>";
print_r($student);
echo "</pre>";



/*
-------------------------------------------
8. VNOŘENÉ POLE
-------------------------------------------

Do pole lze uložit i další pole.
Tím vzniká složitější datová struktura.

To je praktické například tehdy,
když chceme uložit více údajů o více žácích.
*/

echo "<h2>8. Vnořené pole</h2>";

$students = [
    [
        "name" => "Anna",
        "class" => "4.A",
        "points" => 42
    ],
    [
        "name" => "Pavel",
        "class" => "4.B",
        "points" => 38
    ]
];

echo "První student: " . $students[0]["name"] . "<br>";
echo "Jeho třída: " . $students[0]["class"] . "<br>";

echo "Druhý student: " . $students[1]["name"] . "<br>";
echo "Jeho body: " . $students[1]["points"] . "<br>";

echo "<h3>Výpis vnořeného pole</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";



/*
-------------------------------------------
9. ZJIŠTĚNÍ DATOVÉHO TYPU
-------------------------------------------

Typ proměnné lze zjišťovat různými funkcemi:
- gettype()
- is_int()
- is_float()
- is_string()
- is_bool()
- is_array()
*/

echo "<h2>9. Zjištění datového typu</h2>";

$value = [1, 2, 3];

echo "Typ proměnné \$value: " . gettype($value) . "<br>";

if (is_array($value)) {
    echo "Proměnná \$value je pole. <br>";
}



/*
-------------------------------------------
10. PRAKTICKÝ PŘÍKLAD
-------------------------------------------

Jednoduché uložení údajů o produktu.
Na tomto příkladu je vidět kombinace různých typů.
*/

echo "<h2>10. Praktický příklad</h2>";

$product = [
    "name" => "USB flash disk",
    "price" => 199.90,
    "in_stock" => true,
    "capacity_gb" => 64
];

echo "Název produktu: " . $product["name"] . "<br>";
echo "Cena: " . $product["price"] . " Kč<br>";
echo "Kapacita: " . $product["capacity_gb"] . " GB<br>";
echo "Skladem: ";

if ($product["in_stock"]) {
    echo "ano<br>";
} else {
    echo "ne<br>";
}



/*
-------------------------------------------
SHRNUTÍ
-------------------------------------------

Jednoduché datové typy:
- int
- float
- string
- bool
- null

Strukturované datové typy:
- array

Důležité funkce:
- var_dump()  ... vypíše typ i hodnotu
- print_r()   ... vhodné pro výpis polí
- gettype()   ... vrátí název typu
- is_array()  ... ověří, zda je proměnná pole
*/

echo "<h2>Konec ukázky</h2>";

?>