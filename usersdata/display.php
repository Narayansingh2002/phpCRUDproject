<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <h1 class="logo">A logo</h1>
        <nav>
            <li><a href="index.php">Home</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="display.php">User Data</a></li>
        </nav>
    </header>

    <h1 class="title">User Data</h1>

    <div class="userdata-container">
            <?php
            include 'connection.php'; // Include database connection

            $sql = "SELECT id, names, messages FROM customers";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='card'>";
                    echo "<p>Username: " . htmlspecialchars($row['names']) . "</p>";
                    echo "<p>Message: " . htmlspecialchars($row['messages']) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No users found.</p>";
            }

            $conn->close();
            ?>
        </div>

    </div>