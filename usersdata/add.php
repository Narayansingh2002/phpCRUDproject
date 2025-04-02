<?php
include 'connection.php'; 

// Get form data
$names = $_POST['names'];
$messages = $_POST['messages'];

// Insert data into database
$sql = "INSERT INTO customers (names, messages) VALUES ('$names', '$messages')";

if ($conn->query($sql) === TRUE) {
    echo "Data input successful";
} 
 else {
    echo "Input not granted: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>