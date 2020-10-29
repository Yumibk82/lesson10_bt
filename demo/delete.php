<?php
include 'DBConnect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $db = new DBConnect();
    $conn = $db->connect();
    $query = "DELETE FROM students WHERE id=$id";
    $stmt= $conn->prepare($query);
    $stmt->execute();
//    header('location:index.php');
}