<?php

/*
===========================================
PHP TUTORIAL 10
Input Sanitation
===========================================

Cíle:
- pochopit rizika vstupních dat
- naučit se sanitovat vstupy
- používat základní bezpečnostní funkce PHP
*/

echo "<h1>PHP Tutorial 10 - Input Sanitation</h1>";

/*
-------------------------------------------
1. PROČ SANITOVAT VSTUP
-------------------------------------------

Data od uživatele nejsou důvěryhodná.

Mohou obsahovat:
- škodlivý HTML kód
- JavaScript
- SQL injekci
*/

echo "<h2>1. Rizikový vstup</h2>";

$input = "<script>alert('HACK')</script>";

echo "Původní vstup:<br>";
echo $input;

echo "<br><br>";



/*
-------------------------------------------
2. HTMLSPECIALCHARS
-------------------------------------------

Funkce htmlspecialchars() převede
speciální HTML znaky na bezpečný text.
*/

echo "<h2>2. htmlspecialchars()</h2>";

$safeInput = htmlspecialchars($input);

echo "Po sanitaci:<br>";
echo $safeInput;



/*
-------------------------------------------
3. TRIM
-------------------------------------------

Odstraní mezery na začátku a konci textu.
*/

echo "<h2>3. trim()</h2>";

$name = "   Petr   ";

echo "Původní hodnota: '$name'<br>";

$name = trim($name);

echo "Po trim(): '$name'<br>";



/*
-------------------------------------------
4. STRIP_TAGS
-------------------------------------------

Odstraní HTML značky.
*/

echo "<h2>4. strip_tags()</h2>";

$text = "<b>Důležitý text</b>";

echo "Původní: $text<br>";

$cleanText = strip_tags($text);

echo "Po strip_tags(): $cleanText<br>";



/*
-------------------------------------------
5. FILTER_INPUT
-------------------------------------------

PHP obsahuje filtr pro validaci vstupů.
*/

echo "<h2>5. filter_input()</h2>";

$email = "student@example.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo "Email je platný.<br>";

} else {

    echo "Email není platný.<br>";

}



/*
-------------------------------------------
6. SANITACE FORMULÁŘE
-------------------------------------------
*/

echo "<h2>6. Sanitace formuláře</h2>";
?>

<form method="post">

    Jméno:
    <input type="text" name="name">

    <br><br>

    Email:
    <input type="text" name="email">

    <br><br>

    <button type="submit">Odeslat</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    echo "<h3>Výsledek</h3>";

    echo "Jméno: $name<br>";
    echo "Email: $email<br>";
}



/*
-------------------------------------------
7. VALIDACE DAT
-------------------------------------------

Sanitace:
- vyčistí data

Validace:
- ověří správnost dat
*/

echo "<h2>7. Validace</h2>";

$age = "20";

if (filter_var($age, FILTER_VALIDATE_INT)) {

    echo "Věk je validní číslo.<br>";

}



/*
-------------------------------------------
8. PRAKTICKÝ PŘÍKLAD
-------------------------------------------
*/

echo "<h2>8. Praktický příklad</h2>";

$username = "<b>admin</b>";

$safeUsername = htmlspecialchars(strip_tags($username));

echo "Bezpečné uživatelské jméno: $safeUsername<br>";



/*
-------------------------------------------
SHRNUTÍ
-------------------------------------------

Vstup od uživatele nikdy není důvěryhodný.

Základní funkce:

htmlspecialchars()
trim()
strip_tags()

Validace:

filter_var()
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_INT

Sanitace:

FILTER_SANITIZE_EMAIL
*/

echo "<h2>Konec ukázky</h2>";

?>