<?php
global $conn;
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $contact_id = $_GET["id"];

    // Fetch contact details from the database
    $query = "SELECT * FROM contacts_table WHERE ID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $contact_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $contact = $result->fetch_assoc();
    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contact_id = $_POST["id"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];

    // Update contact information in the database
    $query = "UPDATE contacts_table SET Name = ?, PhoneNumber = ? WHERE ID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssi", $name, $phone, $contact_id);
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
    <title>Edit Contact</title>
</head>
<body>
<h2>Edit Contact</h2>

<!-- Edit contact form -->
<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $contact['ID']; ?>">
    Name: <input type="text" name="name" value="<?php echo $contact['Name']; ?>" required><br>
    Phone Number: <input type="text" name="phone" value="<?php echo $contact['PhoneNumber']; ?>" required><br>
    <input type="submit" value="Save">
</form>
</body>
</html>

