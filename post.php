<?php
   if( $_POST ) {
      echo "Welcome ". $_POST['name']. "<br />";
      echo "You are ". $_POST['age']. " years old.";
      
      exit();
   }
?>

<form method="POST">
   Name: <input type="text" name="name">
   Age: <input type="text" name="age">
   <input type = "submit">
</form>