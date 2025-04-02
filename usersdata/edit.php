<?php
include 'connection.php';

if (!isset($_GET['id'])) {
    die("User ID is not available");
}

$id = $_GET['id'];
$sql = "SELECT * FROM customers WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("User can not be found");
}

$users = $result->fetch_assoc();
?>



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
    <h1 class="title">A PHP application</h1>
    <div class="container">
        <p class="form-title">Please fill out this form</p>
    <form action="update.php" method="post">
         <input type="hidden" name="id"  value="<?php echo $users['id']; ?>" required><br>
        <label for="names">Enter your first name:</label>
        <input type="text" name="names" value="<?php echo $users['names']; ?>" required><br>
        <label for="message">Enter your message:</label>
        <input type="text" name="messages" value="<?php echo $users['messages']; ?>" required><br>
        <button type="submit">Update completion</button>
       
    </form>
    </div>
    
</body>
</html>