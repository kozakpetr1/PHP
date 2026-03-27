<?php

/*
===========================================
PHP TUTORIAL 06
Operátory
===========================================

Cíle:
- pochopit práci s operátory
- rozlišit unární a binární operátory
- používat aritmetické, relační a logické operátory
*/

echo "<h1>PHP Tutorial 06 - Operátory</h1>";

/*
-------------------------------------------
1. ARITMETICKÉ OPERÁTORY
-------------------------------------------

Používají se pro matematické výpočty.
*/

echo "<h2>1. Aritmetické operátory</h2>";

$a = 10;
$b = 3;

echo "Součet: " . ($a + $b) . "<br>";
echo "Rozdíl: " . ($a - $b) . "<br>";
echo "Součin: " . ($a * $b) . "<br>";
echo "Podíl: " . ($a / $b) . "<br>";
echo "Zbytek po dělení: " . ($a % $b) . "<br>";



/*
-------------------------------------------
2. UNÁRNÍ OPERÁTORY
-------------------------------------------

Unární operátor pracuje pouze s jedním operandem.
*/

echo "<h2>2. Unární operátory</h2>";

$x = 5;

echo "Původní hodnota: $x <br>";

$x++;
echo "Po inkrementaci (++): $x <br>";

$x--;
echo "Po dekrementaci (--): $x <br>";



/*
-------------------------------------------
3. PŘIŘAZOVACÍ OPERÁTORY
-------------------------------------------

Slouží k přiřazení hodnoty proměnné.
*/

echo "<h2>3. Přiřazovací operátory</h2>";

$value = 10;

$value += 5;   // value = value + 5
echo "Po += : $value <br>";

$value -= 3;
echo "Po -= : $value <br>";

$value *= 2;
echo "Po *= : $value <br>";



/*
-------------------------------------------
4. POROVNÁVACÍ OPERÁTORY
-------------------------------------------

Používají se v podmínkách.
Vrací hodnotu true nebo false.
*/

echo "<h2>4. Porovnávací operátory</h2>";

$a = 10;
$b = "10";

var_dump($a == $b);   // porovnání hodnoty
echo "<br>";

var_dump($a === $b);  // porovnání hodnoty i typu
echo "<br>";

var_dump($a != $b);
echo "<br>";

var_dump($a > 5);
echo "<br>";



/*
-------------------------------------------
5. LOGICKÉ OPERÁTORY
-------------------------------------------

Používají se při práci s podmínkami.
*/

echo "<h2>5. Logické operátory</h2>";

$isLogged = true;
$isAdmin = false;

var_dump($isLogged && $isAdmin);  // AND
echo "<br>";

var_dump($isLogged || $isAdmin);  // OR
echo "<br>";

var_dump(!$isLogged);             // NOT
echo "<br>";



/*
-------------------------------------------
6. OPERÁTOR SPOJENÍ ŘETĚZCŮ
-------------------------------------------
*/

echo "<h2>6. Operátor spojení řetězců</h2>";

$firstName = "Jan";
$lastName = "Novák";

$fullName = $firstName . " " . $lastName;

echo "Celé jméno: $fullName <br>";



/*
-------------------------------------------
7. TERNÁRNÍ OPERÁTOR
-------------------------------------------

Zkrácená forma podmínky.
*/

echo "<h2>7. Ternární operátor</h2>";

$age = 20;

$result = ($age >= 18) ? "dospělý" : "nezletilý";

echo "Uživatel je: $result <br>";



/*
-------------------------------------------
8. BITOVÉ OPERÁTORY
-------------------------------------------

Používají se při práci s jednotlivými bity.
*/

echo "<h2>8. Bitové operátory</h2>";

$a = 6;   // 110
$b = 3;   // 011

echo "AND: " . ($a & $b) . "<br>";
echo "OR: " . ($a | $b) . "<br>";
echo "XOR: " . ($a ^ $b) . "<br>";



/*
-------------------------------------------
9. OPERÁTOR NULL COALESCING
-------------------------------------------

Používá se při práci s hodnotami,
které mohou být null.
*/

echo "<h2>9. Null coalescing operátor</h2>";

$username = null;

$name = $username ?? "host";

echo "Uživatel: $name <br>";



/*
-------------------------------------------
SHRNUTÍ
-------------------------------------------

Důležité skupiny operátorů:

Aritmetické:
+ - * / %

Unární:
++ --

Porovnávací:
== === != > < >= <=

Logické:
&& || !

Bitové:
& | ^

Další:
.   (spojení řetězců)
?:  (ternární operátor)
??  (null coalescing)
*/

echo "<h2>Konec ukázky</h2>";

?>