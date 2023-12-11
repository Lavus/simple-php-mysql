<?php
$servername = "localhost";
$username = "root";
$password = "Password1!";
$db = "test_mistonline";
try {
  $conn = mysqli_connect($servername, $username, $password,$db);
  echo json_encode(array("status" => "Ok", "message" => "Success"));
}catch (mysqli_sql_exception $e) {
  echo json_encode(array("status" => "Error", "message" => $e->getMessage() ));
}
?>