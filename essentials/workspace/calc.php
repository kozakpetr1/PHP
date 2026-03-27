<?php
if (isset($_POST["num1"]) && isset($_POST["num2"])) {

    $num1 = (float)$_POST["num1"];
    $num2 = (float)$_POST["num2"];

    $sum = $num1 + $num2;
}
?>

<form method="post">
    <input type="number" name="num1" value="<?= isset($num1) ? $num1 : '' ?>" placeholder="První číslo">
    <input type="number" name="num2" value="<?= isset($num2) ? $num2 : '' ?>" placeholder="Druhé číslo">
    <button type="submit">Vypočítat</button>
</form>

<?php
    if (isset($sum)) {
        echo "Součet: $num1 + $num2 = $sum <br>";
    }
?>
