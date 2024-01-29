<?php
global $conn;
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $contact_id = $_GET["id"];

    // Delete contact from the database
    $query = "DELETE FROM contacts_table WHERE ID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $contact_id);
    $stmt->execute();
    $stmt->close();

    header("Location: index.php");
    exit();
}
?>
