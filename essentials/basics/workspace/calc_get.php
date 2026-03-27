<?php
if (isset($_GET["num1"]) && isset($_GET["num2"])) {

    $num1 = (float)$_GET["num1"];
    $num2 = (float)$_GET["num2"];

    $sum = $num1 + $num2;
    echo "Součet: $num1 + $num2 = $sum <br>";
}
