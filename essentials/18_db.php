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

echo "Připojeno k databázi\n\n";

$sqlSelect = "SELECT * FROM warehouse;";
$result = $conn->query($sqlSelect);

if ($result->num_rows > 0) {

    echo "<strong>Seznam skladů:</strong>\n\n";

    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "\n";
        echo "Jméno: " . $row["name"] . "\n";
        echo "Ulice: " . $row["street"] . "\n";
        echo "Město: " . $row["city"] . "\n";
        echo "PSČ: " . $row["postal_code"] . "\n";
        echo "Země: " . $row["country"] . "\n\n";
    }

} else {
    echo "Žádná data v tabulce";
}

$conn->close();

echo "Připojení uzavřeno";


