<?php
function verjaardagslijst()
{
  $db = openDatabaseConnection();

  $sql = "SELECT * FROM birthdays ORDER BY month, day, year ASC;";
  $query = $db->prepare($sql);
  $query->execute();

  $result = $conn->query($sql);

	$db = null;

	return $query->fetchAll();
}
?>
