<?php
function verjaardagslijst)
{
  $db = openDatabaseConnection();

  $sql = "SELECT * FROM birthdays ORDER BY month, day, year ASC;";

  $result = $conn->query($sql);
  
}
?>
