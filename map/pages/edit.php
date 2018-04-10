<?php
include '../connect.php';

//$sql = "INSERT INTO birthdays (person, day, month , year) VALUES ('Kees', '2', '2', '1990')";

$person = "unknown";
$day = "unknown";
$month = "unknown";
$year = $row['year'];

  $sql = "SELECT * FROM birthdays WHERE id=" . $_GET['id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $person = $row['person'];
      $day = $row['day'];
      $month = $row['month'];
      $year = $row['year'];
    }
}
?>

<!DOCTYPE html>
<head>
  <title>Verjaardagskalender</title>
  <meta charset="utf-8">
  <link href="../main.css" rel="stylesheet" type="text/css">
</head>
<html>
  <body>
    <form id="editform" action="editAction.php?id=<?= $_GET['id']?>"  method="post" enctype="multipart/form-data">
        Name<input type="text" name="persoon" value="<?= $person?>">
        day<input type="number" name="dag" value="<?= $day?>">
        month<input type="number" name="maand" value="<?= $month?>">
        Year of birth<input type="number" name="jaar" value="<?= $year?>">
        <input type="submit" value="edit">
    </form>
  </body>
</html>
