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
    <form action="add.php" method="post">
        <label for="names">Enter your first name:</label>
        <input type="text" name="names">
        <label for="message">Enter your message:</label>
        <input type="text" name="messages">
        <button type="submit">Submit</button>
       
    </form>
    </div>
    
</body>
</html>