<?php
function getAllBirthdays()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays ORDER BY month, day, year ASC;";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function deletePerson($GET)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays ORDER BY month, day, year ASC;";
	$query = $db->prepare($sql);
	$query->execute();

  $sql = "DELETE FROM birthdays WHERE id= :id;";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $GET['id']);
  $query->execute();
}

function createquery($POST){
	$db = openDatabaseConnection();

  $sql = "INSERT INTO birthdays (person, day, month, year) VALUES (:persoon, :dag, :maand, :jaar);";
	$query = $db->prepare($sql);
  $query->bindParam(":persoon", $POST['persoon']);
  $query->bindParam(":dag", $POST['dag']);
  $query->bindParam(":maand", $POST['maand']);
  $query->bindParam(":jaar", $POST['jaar']);
  $query->execute();
}
?>
