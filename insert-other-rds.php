<?php
include "connect-other-rds.php";
$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('ServerName', 'other-rds', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Julie', 'Dooley', 'julie@example.com')";
try {
  $conn->beginTransaction();
  $conn->exec($sql);
  $conn->commit();
  echo "New records created successfully<br><br>";
} catch(PDOException $e) {
  $conn->rollback();
  echo "Error: " . $e->getMessage() . "<br><br>";
}
$conn = null;
?>