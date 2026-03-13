<?php

/*
===========================================
PHP TUTORIAL 04
Přetypování (Type Casting)
===========================================

Cíle:
- pochopit implicitní a explicitní Přetypování
- naučit se používat type casting
- poznat funkce pro převod typů
*/

echo "<h1>PHP Tutorial 04 - Přetypování</h1>";

/*
-------------------------------------------
1. IMPLICITNÍ Přetypování
-------------------------------------------

PHP často automaticky převádí typy hodnot.
Tomu se říká implicitní konverze.
*/

echo "<h2>1. Implicitní Přetypování</h2>";

$a = "10";
$b = 5;

$result = $a + $b;

echo "Výsledek: $result <br>";

/*
Řetězec "10" byl automaticky převeden na číslo.
*/

var_dump($a);
echo "<br>";
var_dump($result);
echo "<br>";



/*
-------------------------------------------
2. EXPLICITNÍ Přetypování
-------------------------------------------

Explicitní Přetypování provádí programátor.
Používá se tzv. type cast.
*/

echo "<h2>2. Explicitní Přetypování</h2>";

$stringNumber = "25";

$number = (int)$stringNumber;

echo "Původní hodnota: ";
var_dump($stringNumber);
echo "<br>";

echo "Po Přetypování: ";
var_dump($number);
echo "<br>";



/*
-------------------------------------------
3. Přetypování NA ZÁKLADNÍ TYPY
-------------------------------------------

PHP umožňuje Přetypovat na:

(int)
(float)
(string)
(bool)
(array)
(object)
*/

echo "<h2>3. Přetypování na různé typy</h2>";

$value = "15.7";

$intValue = (int)$value;
$floatValue = (float)$value;
$stringValue = (string)$value;
$boolValue = (bool)$value;

echo "Původní hodnota: ";
var_dump($value);
echo "<br>";

echo "Int: ";
var_dump($intValue);
echo "<br>";

echo "Float: ";
var_dump($floatValue);
echo "<br>";

echo "String: ";
var_dump($stringValue);
echo "<br>";

echo "Bool: ";
var_dump($boolValue);
echo "<br>";



/*
-------------------------------------------
4. Přetypování STRING → NUMBER
-------------------------------------------

Pokud string obsahuje číslo,
PHP jej dokáže převést.
*/

echo "<h2>4. Převod textu na číslo</h2>";

$text = "123";

$number = (int)$text;

echo "Text: ";
var_dump($text);
echo "<br>";

echo "Číslo: ";
var_dump($number);
echo "<br>";



/*
Pokud text obsahuje další znaky,
PHP převede pouze začátek.
*/

$text = "123abc";

$number = (int)$text;

echo "Text s písmeny: ";
var_dump($text);
echo "<br>";

echo "Po Přetypování: ";
var_dump($number);
echo "<br>";



/*
-------------------------------------------
5. Přetypování NA BOOL
-------------------------------------------

Při převodu na bool platí:

false:
0
0.0
""
"0"
null
[]

true:
vše ostatní
*/

echo "<h2>5. Přetypování na bool</h2>";

$value1 = 0;
$value2 = 15;

echo "0 jako bool: ";
var_dump((bool)$value1);
echo "<br>";

echo "15 jako bool: ";
var_dump((bool)$value2);
echo "<br>";



/*
-------------------------------------------
6. Přetypování NA POLE
-------------------------------------------

Hodnotu lze převést i na pole.
*/

echo "<h2>6. Přetypování na pole</h2>";

$value = "PHP";

$array = (array)$value;

echo "<pre>";
print_r($array);
echo "</pre>";



/*
-------------------------------------------
7. Přetypování NA OBJEKT
-------------------------------------------

Pole lze převést na objekt.
*/

echo "<h2>7. Přetypování na objekt</h2>";

$user = [
    "name" => "Petr",
    "role" => "teacher"
];

$object = (object)$user;

echo "Jméno: " . $object->name . "<br>";
echo "Role: " . $object->role . "<br>";



/*
-------------------------------------------
8. FUNKCE PRO PŘEVOD TYPOV
-------------------------------------------

PHP obsahuje také speciální funkce:

intval()
floatval()
strval()
boolval()
*/

echo "<h2>8. Funkce pro převod typů</h2>";

$value = "42";

echo intval($value) . "<br>";
echo floatval($value) . "<br>";
echo strval($value) . "<br>";
echo boolval($value) . "<br>";



/*
-------------------------------------------
9. PRAKTICKÝ PŘÍKLAD
-------------------------------------------

Typická situace ve webových aplikacích:
data z formuláře jsou vždy string.
*/

echo "<h2>9. Praktický příklad</h2>";

$inputAge = "20";

$age = (int)$inputAge;

if ($age >= 18) {
    echo "Uživatel je plnoletý.<br>";
}



/*
-------------------------------------------
SHRNUTÍ
-------------------------------------------

Implicitní Přetypování
- provádí PHP automaticky

Explicitní Přetypování
- provádí programátor

Type casting:
(int)
(float)
(string)
(bool)
(array)
(object)

Funkce pro převod:
intval()
floatval()
strval()
boolval()
*/

echo "<h2>Konec ukázky</h2>";

?>