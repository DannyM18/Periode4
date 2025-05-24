<?php

require_once 'db_connect.php';

function addziekmelding(){
    global $conn;

    if (isset($_POST['naam'])) {
        $naam = $_POST['naam'];
        $datum = $_POST['datum'];

        try {
            $sql = "INSERT INTO ziekmelding (naam, datum) VALUES ('$naam', '$datum')";
            $conn->exec($sql);

            echo "<p>Ziekmelding succesvol toegevoegd.</p>";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}
?>