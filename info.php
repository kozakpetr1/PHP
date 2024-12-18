<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
    echo "Jméno: " . $_SESSION["name"] . "<br>";
    echo "Věk: " . $_SESSION["age"];