<?php

/*
===========================================
PHP TUTORIAL 07
Řídicí struktury – podmínky
===========================================

Cíle:
- pochopit princip větvení programu
- naučit se používat if, elseif, else
- používat switch
*/

echo "<h1>PHP Tutorial 07 - Podmínky</h1>";

/*
-------------------------------------------
1. IF
-------------------------------------------

Podmínka if umožňuje vykonat kód
pouze tehdy, pokud je podmínka splněna.
*/

echo "<h2>1. IF</h2>";

$age = 20;

if ($age >= 18) {
    echo "Uživatel je plnoletý.<br>";
}



/*
-------------------------------------------
2. IF - ELSE
-------------------------------------------
*/

echo "<h2>2. IF - ELSE</h2>";

$temperature = 15;

if ($temperature > 20) {
    echo "Je teplo.<br>";
} else {
    echo "Je chladno.<br>";
}



/*
-------------------------------------------
3. IF - ELSEIF - ELSE
-------------------------------------------
*/

echo "<h2>3. IF - ELSEIF - ELSE</h2>";

$score = 75;

if ($score >= 90) {

    echo "Známka: A<br>";

} elseif ($score >= 75) {

    echo "Známka: B<br>";

} elseif ($score >= 60) {

    echo "Známka: C<br>";

} else {

    echo "Známka: F<br>";
}



/*
-------------------------------------------
4. VNORENÉ PODMÍNKY
-------------------------------------------
*/

echo "<h2>4. Vnořené podmínky</h2>";

$isLogged = true;
$isAdmin = false;

if ($isLogged) {

    if ($isAdmin) {
        echo "Administrátor.<br>";
    } else {
        echo "Běžný uživatel.<br>";
    }

}



/*
-------------------------------------------
5. SWITCH
-------------------------------------------

Používá se při větším počtu možností.
*/

echo "<h2>5. SWITCH</h2>";

$day = 3;

switch ($day) {

    case 1:
        echo "Pondělí<br>";
        break;

    case 2:
        echo "Úterý<br>";
        break;

    case 3:
        echo "Středa<br>";
        break;

    case 4:
        echo "Čtvrtek<br>";
        break;

    case 5:
        echo "Pátek<br>";
        break;

    default:
        echo "Víkend<br>";
}



/*
-------------------------------------------
6. TERNÁRNÍ OPERÁTOR
-------------------------------------------

Zkrácená forma podmínky.
*/

echo "<h2>6. Ternární operátor</h2>";

$age = 16;

$result = ($age >= 18) ? "dospělý" : "nezletilý";

echo "Uživatel je: $result<br>";



/*
-------------------------------------------
7. PRAKTICKÝ PŘÍKLAD
-------------------------------------------
*/

echo "<h2>7. Praktický příklad</h2>";

$password = "1234";

if ($password === "1234") {

    echo "Přihlášení úspěšné.<br>";

} else {

    echo "Špatné heslo.<br>";
}



/*
-------------------------------------------
SHRNUTÍ
-------------------------------------------

Řídicí struktury:

if
if else
if elseif else
switch

Používají se pro větvení programu.
*/

echo "<h2>Konec ukázky</h2>";

?>