<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["name"] = "Petr";
$_SESSION["age"] = 51;
echo "Nastavil jsem session. ";
echo "Klikni na <a href=\"./info.php\">info</a>.";

?>
</body>
</html>