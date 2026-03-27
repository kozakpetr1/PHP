<form method="post">

    Jméno:
    <input type="text" name="name">

    <br><br>

    <button type="submit">Odeslat</button>

</form>
<?php

if (isset($_POST["name"])) {

    echo "Hodnota z POST: " . htmlspecialchars($_POST["name"]) . "<br>";
}