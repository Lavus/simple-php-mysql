<?php
$servername = "localhost";
$username = "root";
$password = "Password1!";
$db = "test_mistonline";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully<br><br>";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage() . "<br><br>";
}
?>