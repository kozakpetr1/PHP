<?php

/*
===========================================
PHP TUTORIAL 11
Superglobální proměnné
===========================================

Cíle:
- pochopit význam superglobálních proměnných
- naučit se používat nejdůležitější z nich
- získávat data z HTTP požadavku
*/

echo "<h1>PHP Tutorial 11 - Superglobální proměnné</h1>";

/*
-------------------------------------------
1. CO JSOU SUPERGLOBÁLNÍ PROMĚNNÉ
-------------------------------------------

Superglobální proměnné jsou speciální pole,
která jsou dostupná v celém skriptu.

Není nutné je deklarovat pomocí global.
*/

echo "<h2>1. Přehled superglobálních proměnných</h2>";

echo "<ul>
<li>\$_GET</li>
<li>\$_POST</li>
<li>\$_REQUEST</li>
<li>\$_SERVER</li>
<li>\$_COOKIE</li>
<li>\$_SESSION</li>
<li>\$_FILES</li>
<li>\$_ENV</li>
<li>\$GLOBALS</li>
</ul>";



/*
-------------------------------------------
2. SUPERGLOBÁLNÍ POLE $_GET
-------------------------------------------

Obsahuje parametry z URL.

Například:
script.php?name=Petr
*/

echo "<h2>2. \$_GET</h2>";

if (isset($_GET["name"])) {

    $name = htmlspecialchars($_GET["name"]);

    echo "Jméno z URL: $name <br>";
}



/*
-------------------------------------------
3. SUPERGLOBÁLNÍ POLE $_POST
-------------------------------------------

Obsahuje data odeslaná formulářem
metodou POST.
*/

echo "<h2>3. \$_POST</h2>";
?>

<form method="post">

    Jméno:
    <input type="text" name="username">

    <br><br>

    <button type="submit">Odeslat</button>

</form>

<?php

if (isset($_POST["username"])) {

    $username = htmlspecialchars($_POST["username"]);

    echo "Zadané jméno: $username <br>";
}



/*
-------------------------------------------
4. SUPERGLOBÁLNÍ POLE $_REQUEST
-------------------------------------------

Obsahuje kombinaci:

GET
POST
COOKIE
*/

echo "<h2>4. \$_REQUEST</h2>";

if (isset($_REQUEST["username"])) {

    echo "Hodnota z REQUEST: " . htmlspecialchars($_REQUEST["username"]) . "<br>";
}



/*
-------------------------------------------
5. SUPERGLOBÁLNÍ POLE $_SERVER
-------------------------------------------

Obsahuje informace o serveru a požadavku.
*/

echo "<h2>5. \$_SERVER</h2>";

echo "Server software: " . $_SERVER["SERVER_SOFTWARE"] . "<br>";
echo "Metoda požadavku: " . $_SERVER["REQUEST_METHOD"] . "<br>";
echo "IP adresa klienta: " . $_SERVER["REMOTE_ADDR"] . "<br>";



/*
-------------------------------------------
6. SUPERGLOBÁLNÍ POLE $_COOKIE
-------------------------------------------

Obsahuje cookies odeslané prohlížečem.
*/

echo "<h2>6. \$_COOKIE</h2>";

if (isset($_COOKIE["language"])) {

    echo "Jazyk uživatele: " . $_COOKIE["language"] . "<br>";
}



/*
-------------------------------------------
7. SUPERGLOBÁLNÍ POLE $_SESSION
-------------------------------------------

Používá se pro ukládání dat
mezi jednotlivými požadavky.
*/

echo "<h2>7. \$_SESSION</h2>";

session_start();

$_SESSION["user"] = "Petr";

echo "Uživatel v session: " . $_SESSION["user"] . "<br>";



/*
-------------------------------------------
8. SUPERGLOBÁLNÍ POLE $_FILES
-------------------------------------------

Používá se při uploadu souborů.
*/

echo "<h2>8. \$_FILES</h2>";
?>

<form method="post" enctype="multipart/form-data">

    Vyber soubor:
    <input type="file" name="file">

    <br><br>

    <button type="submit">Nahrát</button>

</form>

<?php

if (isset($_FILES["file"])) {

    echo "Název souboru: " . $_FILES["file"]["name"] . "<br>";
}



/*
-------------------------------------------
9. SUPERGLOBÁLNÍ POLE $GLOBALS
-------------------------------------------

Obsahuje všechny globální proměnné.
*/

echo "<h2>9. \$GLOBALS</h2>";

$school = "IT škola";

function showSchool()
{
    echo $GLOBALS["school"];
}

showSchool();



/*
-------------------------------------------
SHRNUTÍ
-------------------------------------------

Superglobální proměnné jsou dostupné
v celém skriptu.

Nejčastější použití:

$_GET
$_POST
$_SERVER
$_SESSION
$_COOKIE
$_FILES
$GLOBALS
*/

echo "<h2>Konec ukázky</h2>";

?>