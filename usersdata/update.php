<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $names = $_POST['names'];
    $messages = $_POST['messages'];

    $sql = "UPDATE customers SET names='$names', messages='$messages' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data has been updated";
    } else {
        echo "Error occured in updating data" . $conn->error;
    }

    $conn->close();
}
?>