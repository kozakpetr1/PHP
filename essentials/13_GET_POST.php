<?php

/*
===========================================
PHP TUTORIAL 13
GET a POST
===========================================

Cíle:
- pochopit rozdíl mezi metodami GET a POST
- naučit se číst data z URL
- naučit se zpracovat formulář
*/

echo "<h1>PHP Tutorial 13 - GET a POST</h1>";

/*
-------------------------------------------
1. METODA GET
-------------------------------------------

Data jsou odeslána jako součást URL.

Například:

script.php?name=Petr&age=20
*/

echo "<h2>1. Metoda GET</h2>";

if (isset($_GET["name"])) {

    $name = htmlspecialchars($_GET["name"]);
    echo "Jméno z URL: $name <br>";
}

if (isset($_GET["age"])) {

    $age = (int)$_GET["age"];
    echo "Věk z URL: $age <br>";
}



/*
-------------------------------------------
2. VYTVOŘENÍ ODKAZU S GET PARAMETRY
-------------------------------------------
*/

echo "<h2>2. Odkaz s GET parametry</h2>";

echo '<a href="?name=Jan&age=19">Klikni zde</a><br>';



/*
-------------------------------------------
3. METODA POST
-------------------------------------------

POST se používá především
pro odesílání formulářů.
*/

echo "<h2>3. Metoda POST</h2>";
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

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $age = (int)$_POST["age"];

    echo "<h3>Odeslaná data</h3>";

    echo "Jméno: $name <br>";
    echo "Věk: $age <br>";
}



/*
-------------------------------------------
4. KONTROLA EXISTENCE DAT
-------------------------------------------

Před použitím hodnoty je vhodné
ověřit její existenci.
*/

echo "<h2>4. Kontrola dat</h2>";

if (isset($_POST["name"])) {

    echo "Proměnná name existuje.<br>";
}



/*
-------------------------------------------
5. ROZDÍL MEZI GET A POST
-------------------------------------------
*/

echo "<h2>5. Rozdíly</h2>";

echo "<ul>
<li>GET – data jsou v URL</li>
<li>POST – data jsou v těle požadavku</li>
<li>GET – omezená délka</li>
<li>POST – větší množství dat</li>
</ul>";



/*
-------------------------------------------
6. PRAKTICKÝ PŘÍKLAD
-------------------------------------------

Jednoduchá kalkulačka s POST.
*/

echo "<h2>6. Kalkulačka</h2>";
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
7. BEZPEČNOST
-------------------------------------------

Data od uživatele je nutné vždy:

1) sanitovat
2) validovat
*/

echo "<h2>7. Bezpečnost</h2>";

echo "Používejte například:<br>";
echo "htmlspecialchars()<br>";
echo "filter_var()<br>";



/*
-------------------------------------------
SHRNUTÍ
-------------------------------------------

GET
- data v URL
- vhodné pro vyhledávání a parametry

POST
- data v těle HTTP požadavku
- vhodné pro formuláře
*/

echo "<h2>Konec ukázky</h2>";

?>