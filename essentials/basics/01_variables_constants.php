<?php

/*
===========================================
PHP TUTORIAL 01
Proměnné (lokální, globální) a konstanty
===========================================

Cíle:
- pochopit práci s proměnnými
- rozdíl mezi lokální a globální proměnnou
- použití konstant

Skript lze spustit v CLI i v prohlížeči.
*/

echo "<h1>PHP Tutorial 01 - Proměnné a konstanty</h1>";

/*
-------------------------------------------
1. ZÁKLADNÍ PROMĚNNÉ
-------------------------------------------

Proměnná v PHP:
- začíná znakem $
- název je case-sensitive
- typ proměnné se určuje automaticky
*/

$name = "Petr";
$age = 51;
$teacher = true;

echo "<h2>1. Základní proměnné</h2>";

echo "Jméno: $name <br>";
echo "Věk: $age <br>";

if ($teacher) {
    echo "Profese: učitel <br>";
}

/*
PHP dokáže automaticky určit typ proměnné.
Typ lze zjistit funkcí var_dump().
*/

echo "<h3>Typy proměnných</h3>";

var_dump($name);
echo "<br>";

var_dump($age);
echo "<br>";

var_dump($teacher);
echo "<br>";



/*
-------------------------------------------
2. LOKÁLNÍ PROMĚNNÉ
-------------------------------------------

Proměnná vytvořená uvnitř funkce
existuje pouze uvnitř této funkce.
*/

echo "<h2>2. Lokální proměnná</h2>";

function localExample()
{
    $message = "Tato proměnná existuje pouze uvnitř funkce.";

    echo $message;
}

localExample();

/*
Pokud bychom se pokusili použít $message mimo funkci,
PHP vyvolá chybu (proměnná neexistuje).
*/

// echo $message;  // ERROR



/*
-------------------------------------------
3. GLOBÁLNÍ PROMĚNNÉ
-------------------------------------------

Globální proměnná je vytvořena mimo funkci.
Ve funkci ji nelze použít přímo.
*/

echo "<h2>3. Globální proměnná</h2>";

$school = "Střední škola IT";

function globalExample()
{
    // proměnná $school zde není dostupná
    // echo $school; // ERROR

    /*
    Klíčové slovo global zpřístupní globální proměnnou
    uvnitř funkce.
    */

    global $school;

    echo "Pracuji na škole: $school";
}

globalExample();



/*
-------------------------------------------
4. SUPERGLOBÁLNÍ POLE $GLOBALS
-------------------------------------------

Všechny globální proměnné jsou dostupné
v poli $GLOBALS.
*/

echo "<h2>4. Pole \$GLOBALS</h2>";

function globalsExample()
{
    echo "Hodnota proměnné school: ";
    echo $GLOBALS['school'];
}

globalsExample();



/*
-------------------------------------------
5. KONSTANTY
-------------------------------------------

Konstanta:
- hodnota se po definování nemění
- nemá znak $
- zapisuje se obvykle velkými písmeny
*/

echo "<h2>5. Konstanty</h2>";

define("SITE_NAME", "Moje první PHP aplikace");

echo "Název aplikace: " . SITE_NAME . "<br>";



/*
Od PHP 7 lze konstanty definovat také pomocí const.
*/

const VERSION = "1.0";

echo "Verze aplikace: " . VERSION . "<br>";



/*
-------------------------------------------
6. PRAKTICKÝ PŘÍKLAD
-------------------------------------------

Ukázka jednoduché konfigurace aplikace.
Konstanty se často používají pro nastavení systému.
*/

define("DB_HOST", "localhost");
define("DB_NAME", "school");
define("DB_USER", "root");

echo "<h2>6. Konfigurace aplikace</h2>";

echo "Databázový server: " . DB_HOST . "<br>";
echo "Databáze: " . DB_NAME . "<br>";
echo "Uživatel: " . DB_USER . "<br>";



/*
-------------------------------------------
SHRNUTÍ
-------------------------------------------

Proměnné:
- začínají znakem $
- mohou být lokální nebo globální

Lokální proměnná:
- existuje pouze uvnitř funkce

Globální proměnná:
- existuje mimo funkci
- ve funkci ji zpřístupníme pomocí global nebo $GLOBALS

Konstanty:
- nemají znak $
- jejich hodnota se nemění
- definují se pomocí define() nebo const
*/

echo "<h2>Konec ukázky</h2>";

?>