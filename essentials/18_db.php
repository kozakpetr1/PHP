<?php
/*
===========================================
PHP TUTORIAL 18
Databases
===========================================

Níže je kompletní jednoduchý skript, který:
- se připojí k databázi
- načte data (SELECT)
- vypíše výsledky

---
*/

echo "<h1>PHP Tutorial 18 - Práce s databází (MySQLi OOP)</h1>";

$host = "localhost";
$user = "root";
$password = "";
$database = "store";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Chyba připojení: " . $conn->connect_error);
}

echo "Připojeno k databázi<br><br>";

$sqlSelect = "SELECT * FROM warehouse;";
$result = $conn->query($sqlSelect);

if ($result->num_rows > 0) {

    echo "<strong>Seznam skladů:</strong><br><br>";

    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Jméno: " . $row["name"] . "<br>";
        echo "Ulice: " . $row["street"] . "<br>";
        echo "Město: " . $row["city"] . "<br>";
        echo "PSČ: " . $row["postal_code"] . "<br>";
        echo "Země: " . $row["country"] . "<br><br>";
    }

} else {
    echo "Žádná data v tabulce";
}

$conn->close();

echo "Připojení uzavřeno";


