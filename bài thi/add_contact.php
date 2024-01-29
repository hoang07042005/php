<?php
global $conn;
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];

    // Insert new contact into the database
    $query = "INSERT INTO contacts_table (Name, PhoneNumber) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $name, $phone);
    $stmt->execute();
    $stmt->close();

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Contact</title>
</head>
<body>
<h2>Add New Contact</h2>

<!-- Add new contact form -->
<form method="post" action="">
    Name: <input type="text" name="name" required><br>
    Phone Number: <input type="text" name="phone" required><br>
    <input type="submit" value="Add">
</form>
</body>
</html>

