<?php
include "connect-localhost.php";
$sql = "SELECT id, firstname, lastname FROM MyGuests";
try {
  $prep = $conn->prepare($sql);
  $prep->execute();
  if ($prep->rowCount() > 0) {
    $result = $prep->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $row) {
      echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
  } else {
    echo "0 results<br>";
  }
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>