<?php

/*
===========================================
PHP TUTORIAL 08
Loops
===========================================

Cíle:
- pochopit princip cyklů
- naučit se používat for, while, do...while
- pracovat s polem pomocí foreach
*/

echo "<h1>PHP Tutorial 08 - Loops</h1>";



/*
-------------------------------------------
1. FOR LOOP
-------------------------------------------

Používá se, když známe počet opakování.
*/

echo "<h2>1. For loop</h2>";

for ($i = 1; $i <= 5; $i++) {

    echo $i * $i . "<br>";
}



/*
-------------------------------------------
2. WHILE LOOP
-------------------------------------------

Cyklus běží, dokud je podmínka pravdivá.
*/

echo "<h2>2. While loop</h2>";

$i = 1;

while ($i <= 5) {

    echo "Hodnota: $i <br>";

    $i++;
}



/*
-------------------------------------------
3. DO WHILE LOOP
-------------------------------------------

Podmínka se kontroluje až po provedení cyklu.
*/

echo "<h2>3. Do...while loop</h2>";

$i = 1;

do {

    echo "Číslo: $i <br>";

    $i++;

} while ($i <= 5);



/*
-------------------------------------------
4. FOREACH LOOP
-------------------------------------------

Používá se pro práci s polem.
*/

echo "<h2>4. Foreach loop</h2>";

$subjects = ["PHP", "Databáze", "Sítě", "Kybernetická bezpečnost"];

foreach ($subjects as $subject) {

    echo $subject . "<br>";
}



/*
-------------------------------------------
5. FOREACH S KLÍČEM
-------------------------------------------
*/

echo "<h2>5. Foreach s klíčem</h2>";

$student = [
    "name" => "Petr",
    "age" => 19,
    "class" => "4.IT"
];

foreach ($student as $key => $value) {

    echo "$key : $value <br>";
}



/*
-------------------------------------------
6. BREAK
-------------------------------------------

Ukončí cyklus.
*/

echo "<h2>6. Break</h2>";

for ($i = 1; $i <= 10; $i++) {

    if ($i == 5) {
        break;
    }

    echo $i . "<br>";
}



/*
-------------------------------------------
7. CONTINUE
-------------------------------------------

Přeskočí aktuální iteraci.
*/

echo "<h2>7. Continue</h2>";

for ($i = 1; $i <= 5; $i++) {

    if ($i == 3) {
        continue;
    }

    echo $i . "<br>";
}



/*
-------------------------------------------
8. PRAKTICKÝ PŘÍKLAD
-------------------------------------------
*/

echo "<h2>8. Praktický příklad</h2>";

$numbers = [10, 20, 30, 40];

$sum = 0;

foreach ($numbers as $number) {

    $sum += $number;
}

echo "Součet: $sum <br>";



/*
-------------------------------------------
SHRNUTÍ
-------------------------------------------

Cyklus umožňuje opakovat kód.

Základní typy:

for
while
do...while
foreach

Další příkazy:

break
continue
*/

echo "<h2>Konec ukázky</h2>";

?>