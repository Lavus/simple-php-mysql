<?php
echo "<link type='text/css' rel='StyleSheet noopener noreferrer' target='_blank' href='tablecss.css'>";
include "connect-localhost.php";
class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }
  function current() {
    return "<td class='center'>" . parent::current(). "</td>";
  }
  function beginChildren() {
    echo "<tr>";
  }
  function endChildren() {
    echo "</tr>" . "\n";
  }
}
$sql = "SELECT id, firstname, lastname FROM MyGuests";
try {
  $prep = $conn->prepare($sql);
  $prep->execute();
  if ($prep->rowCount() > 0){
    echo "<table id='customers'>";
    echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";
    $result = $prep->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($prep->fetchAll())) as $k=>$v) {
        echo $v;
    }
    echo "</table>";
  } else {
    echo "0 results<br>";
  }
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>