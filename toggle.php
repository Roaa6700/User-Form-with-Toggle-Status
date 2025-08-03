<?php
$conn = new mysqli("localhost", "root", "", "employees");

$id = $_GET['id'];
$currentStatus = $_GET['status'];
$newStatus = ($currentStatus == 0) ? 1 : 0;

$conn->query("UPDATE users SET status = $newStatus WHERE id = $id");

header("Location: index.php");
exit();