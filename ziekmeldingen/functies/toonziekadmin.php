<?php
    require_once 'db_connect.php';

function toonziekadmin(){
    global $conn;

    $sql = "SELECT * FROM ziekmelding";

    try {
        $result = $conn->query($sql);
        $result = $result->fetchALL(PDO::FETCH_ASSOC);

        echo "<h2>tabel ziekmeldingen</h2>";
        echo "<table border='1'>";
        echo "<tr><th>naam</th><th>datum</th><th>delete</th></tr>";

        if (count($result) > 0) {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['naam']) . "</td>";
                echo "<td>" . htmlspecialchars($row['datum']) . "</td>";
                echo "<td><center><a class='delete' href='functies/delete.php?id=" . urlencode($row['id']) . "'>X</a></center></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Geen ziekmeldingen gevonden.</td></tr>";
        }

        echo "</table>";
    } catch (PDOException $e) {
        echo "Fout bij het ophalen van de ziekmeldingen: " . $e->getMessage();
    }
}
?>