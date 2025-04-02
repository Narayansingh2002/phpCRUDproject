<?php
include "connection.php";
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM `customers` WHERE id=$id";
    $conn->query($sql);

    header('location: admin.php');
    exit;
}