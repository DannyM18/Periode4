<?php

include 'functies/add.php';

addziekmelding();
?>

<form action="addziekmelding.php" method="post">
    <p>
        <input type="text" placeholder="naam" name="naam" id="naam" required>
        <br>
        <input type="text" placeholder="datum" name="datum" id="datum" required>
        <br>
        <input type="submit" value="Toevoegen">
        <br>
        <a href="admin.php">Terug naar admin</a>
    </p>
</form>