<?php

if (isset($_GET["name"])) {

    echo "Hodnota z GET: " . htmlspecialchars($_GET["name"]) . "<br>";
}

?>