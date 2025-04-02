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

    <h1 class="title">Admin</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Message</th>
                <th scope="col">Task</th>
            </tr>
        </thead>

        <tbody>
  <?php
        include "connection.php";
        $sql = "SELECT * FROM customers";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid task");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th>$row[id]</th>
        <td>$row[names]</td>
        <td>$row[messages]</td>
        <td>
                  <a class='updateButton' href='edit.php?id=$row[id]'>Edit</a>
                  <a class='deleteButton' href='delete.php?id=$row[id]'>Delete</a>
                </td>
      </tr>
      ";
        }
        ?>  
  </tbody>  
    </table>