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

function dataToEdit($data)
{
	$db = openDatabaseConnection();

  $sql = "SELECT * FROM birthdays WHERE id =:id;";
  $query = $db->prepare($sql);
  $query->bindParam(':id',$data['id']);
  $query->execute();
	$result =  $query->setFetchMode(PDO::FETCH_ASSOC);
	return $query->fetchAll();
}

function Update($POST)
{
	$db = openDatabaseConnection();
	$stmt = $conn->prepare("UPDATE birthdays SET person =:person , day =:day, month =:month, year =:year WHERE id =:id ;");
	$stmt->bind_param(":person",$POST[0]);
	$stmt->bind_param(":day",$POST[1]);
	$stmt->bind_param(":month",$POST[2]);
	$stmt->bind_param(":year",$POST[3]);
  $stmt->bind_param(":id",$POST[4]);
  $stmt->execute();
  $stmt->close();
  $conn->close();
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
