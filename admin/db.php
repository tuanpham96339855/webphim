<?php
$conn = new mysqli('localhost', 'root', '','webphim');

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
mysqli_query($conn, "SET NAMES 'UTF8'");
?>
