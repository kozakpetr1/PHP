<?php

/*
===========================================
PHP TUTORIAL 15
JSON handling
===========================================

Cíle:
- pochopit co je JSON
- převádět data mezi PHP a JSON
- pracovat s JSON soubory
*/

echo "<h1>PHP Tutorial 15 - JSON</h1>";

/*
-------------------------------------------
1. CO JE JSON
-------------------------------------------

JSON = JavaScript Object Notation

Je to textový formát pro ukládání dat.

Příklad JSON:

{
  "name": "Petr",
  "age": 51,
  "teacher": true
}
*/

echo "<h2>1. Ukázka JSON</h2>";

$jsonExample = '{"name":"Petr","age":51,"teacher":true}';

echo $jsonExample . "<br>";



/*
-------------------------------------------
2. JSON → PHP
-------------------------------------------

Funkce json_decode() převádí JSON
na PHP strukturu.
*/

echo "<h2>2. JSON → PHP</h2>";

$data = json_decode($jsonExample);

echo "Jméno: " . $data->name . "<br>";
echo "Věk: " . $data->age . "<br>";



/*
Druhý parametr true vrátí asociativní pole.
*/

$dataArray = json_decode($jsonExample, true);

echo "Jméno z pole: " . $dataArray["name"] . "<br>";



/*
-------------------------------------------
3. PHP → JSON
-------------------------------------------

Funkce json_encode() převádí PHP data
na JSON.
*/

echo "<h2>3. PHP → JSON</h2>";

$user = [
    "name" => "Jan",
    "age" => 19,
    "student" => true
];

$json = json_encode($user);

echo $json . "<br>";



/*
-------------------------------------------
4. FORMÁTOVANÝ JSON
-------------------------------------------

JSON lze zapsat přehledněji.
*/

echo "<h2>4. Pretty JSON</h2>";

$pretty = json_encode($user, JSON_PRETTY_PRINT);

echo "<pre>";
echo $pretty;
echo "</pre>";



/*
-------------------------------------------
5. ULOŽENÍ JSON DO SOUBORU
-------------------------------------------
*/

echo "<h2>5. Uložení JSON</h2>";

file_put_contents("user.json", $pretty);

echo "JSON uložen do souboru.<br>";



/*
-------------------------------------------
6. NAČTENÍ JSON ZE SOUBORU
-------------------------------------------
*/

echo "<h2>6. Načtení JSON</h2>";

$jsonFromFile = file_get_contents("user.json");

$data = json_decode($jsonFromFile, true);

echo "Jméno: " . $data["name"] . "<br>";



/*
-------------------------------------------
7. PRAKTICKÝ PŘÍKLAD
-------------------------------------------

Uložení seznamu studentů.
*/

echo "<h2>7. Seznam studentů</h2>";

$students = [
    ["name" => "Anna", "class" => "4A"],
    ["name" => "Pavel", "class" => "4B"]
];

$jsonStudents = json_encode($students, JSON_PRETTY_PRINT);

file_put_contents("students.json", $jsonStudents);

echo "<pre>";
echo $jsonStudents;
echo "</pre>";



/*
-------------------------------------------
8. ČTENÍ SEZNAMU STUDENTŮ
-------------------------------------------
*/

echo "<h2>8. Čtení seznamu</h2>";

$data = json_decode(file_get_contents("students.json"), true);

foreach ($data as $student) {

    echo $student["name"] . " - " . $student["class"] . "<br>";
}



/*
-------------------------------------------
SHRNUTÍ
-------------------------------------------

JSON → PHP
json_decode()

PHP → JSON
json_encode()

Práce se soubory:
file_put_contents()
file_get_contents()
*/

echo "<h2>Konec ukázky</h2>";

?>