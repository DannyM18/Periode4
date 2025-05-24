<?php
    require_once 'db_connect.php';

    function toonziek() {
        global $conn;

        $sql = "SELECT * FROM ziekmelding";

        try{
            $result = $conn->query($sql);
            $result = $result->fetchAll(PDO::FETCH_ASSOC);

            echo "<h2>Tabel ziekmeldingen</h2>";
            echo "<table border='1'>";
            echo "<tr><th>naam</th><th>datum</th></tr>";

            if (count($result) > 0) {
                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['naam']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['datum']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'>Geen ziekmeldingen gevonden.</td></tr>";
            }
            echo "</table>";
        } catch (PDOException $e) {
            echo "Fout bij het ophalen van de gegevens: " . $e->getMessage();
        }
    }
?>