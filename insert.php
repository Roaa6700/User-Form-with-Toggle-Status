<?php
$conn = new mysqli("localhost", "root", "", "employees");

$name = $_POST['name'];
$age = $_POST['age'];

if ($name && $age) {
  $stmt = $conn->prepare("INSERT INTO users (name, age) VALUES (?, ?)");
  $stmt->bind_param("si", $name, $age);
  $stmt->execute();
}

header("Location: index.php");
exit();