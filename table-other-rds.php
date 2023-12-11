<?php
include "connect-other-rds.php";
$sql = "CREATE TABLE MyGuests (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, email VARCHAR(50), reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
try {
  $conn->exec($sql);
  echo "Table MyGuests created successfully<br><br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage() . "<br><br>";
}
$conn = null;
?>