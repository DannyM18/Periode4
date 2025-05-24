<?php
require_once 'db_connect.php';

$id = $_GET['id'];

try {

    $sql = "DELETE FROM ziekmelding WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    $stmt->execute();


    header("Location: ../admin.php");
} catch (PDOException $e) {
    echo "Fout bij het verwijderen" . $e->getMessage();
}

$conn = null;
?>