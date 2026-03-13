<?php

/*
===========================================
PHP TUTORIAL 09
Input a Output
===========================================

Cíle:
- pochopit základní výstup v PHP
- naučit se číst vstupní data
- pracovat s GET a POST parametry
*/

echo "<h1>PHP Tutorial 09 - Input a Output</h1>";

/*
-------------------------------------------
1. ZÁKLADNÍ VÝSTUP – echo
-------------------------------------------

Nejpoužívanější způsob výpisu dat v PHP.
*/

echo "<h2>1. Výstup pomocí echo</h2>";

echo "Hello world!<br>";

$name = "Petr";

echo "Jméno: $name<br>";



/*
-------------------------------------------
2. VÝSTUP POMOCÍ print
-------------------------------------------

Funguje podobně jako echo,
ale je to funkce.
*/

echo "<h2>2. Výstup pomocí print</h2>";

print "Toto je výpis pomocí print.<br>";



/*
-------------------------------------------
3. LADICÍ VÝSTUP
-------------------------------------------

Pro výpis struktury proměnných.
*/

echo "<h2>3. Ladicí výstup</h2>";

$data = [
    "name" => "Jan",
    "age" => 19,
    "student" => true
];

echo "<pre>";
print_r($data);
echo "</pre>";

echo "<pre>";
var_dump($data);
echo "</pre>";



/*
-------------------------------------------
4. HTML FORMULÁŘ – VSTUP UŽIVATELE
-------------------------------------------

Nejčastější způsob získání vstupu ve webu.
*/

echo "<h2>4. HTML formulář</h2>";
?>

<form method="post">

    Jméno:
    <input type="text" name="name">

    <br><br>

    Věk:
    <input type="number" name="age">

    <br><br>

    <button type="submit">Odeslat</button>

</form>

<?php

/*
-------------------------------------------
5. ČTENÍ DAT Z FORMULÁŘE
-------------------------------------------

POST data jsou dostupná v poli $_POST.
*/

echo "<h2>5. Zpracování POST dat</h2>";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["name"];
    $age = $_POST["age"];

    echo "Zadané jméno: $name <br>";
    echo "Zadaný věk: $age <br>";
}



/*
-------------------------------------------
6. GET PARAMETRY
-------------------------------------------

GET parametry jsou součástí URL.

např.
example.php?city=Praha
*/

echo "<h2>6. GET parametry</h2>";

if (isset($_GET["city"])) {

    $city = $_GET["city"];

    echo "Město: $city <br>";
}



/*
-------------------------------------------
7. SUPERGLOBÁLNÍ POLE
-------------------------------------------

PHP poskytuje speciální pole:

$_GET
$_POST
$_SERVER
$_COOKIE
$_SESSION
$_FILES
*/

echo "<h2>7. Superglobální pole</h2>";

echo "Server software: " . $_SERVER["SERVER_SOFTWARE"] . "<br>";
echo "Metoda požadavku: " . $_SERVER["REQUEST_METHOD"] . "<br>";



/*
-------------------------------------------
8. PRAKTICKÝ PŘÍKLAD
-------------------------------------------

Jednoduchý výpočet z formuláře.
*/

echo "<h2>8. Kalkulačka</h2>";

?>

<form method="post">

    Číslo A:
    <input type="number" name="a">

    <br><br>

    Číslo B:
    <input type="number" name="b">

    <br><br>

    <button type="submit">Sečíst</button>

</form>

<?php

if (isset($_POST["a"]) && isset($_POST["b"])) {

    $a = (float)$_POST["a"];
    $b = (float)$_POST["b"];

    $sum = $a + $b;

    echo "Součet: $sum <br>";
}



/*
-------------------------------------------
SHRNUTÍ
-------------------------------------------

Výstup:

echo
print
print_r()
var_dump()

Vstup:

$_GET
$_POST

Další důležité pole:

$_SERVER
$_COOKIE
$_SESSION
$_FILES
*/

echo "<h2>Konec ukázky</h2>";

?>