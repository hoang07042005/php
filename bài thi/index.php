<?php
global $conn;
include("config.php");

// Lấy danh bạ từ cơ sở dữ liệu
$query = "SELECT * FROM contacts_table";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh Bạ Điện Thoại</title>
</head>
<body>
<h2>Danh Bạ Điện Thoại</h2>

<!-- Hiển thị danh bạ -->
<ul>
    <?php while ($row = $result->fetch_assoc()): ?>
        <li>
            <?php echo $row['Name']; ?> - <?php echo $row['PhoneNumber']; ?>
            <a href="edit_contact.php?id=<?php echo $row['ID']; ?>">Edit</a>
            <a href="delete_contact.php?id=<?php echo $row['ID']; ?>">Delete</a>
        </li>
    <?php endwhile; ?>
</ul>

<!-- Form thêm liên lạc mới -->
<a href="add_contact.php">Thêm Liên Lạc Mới</a>
</body>
</html>

