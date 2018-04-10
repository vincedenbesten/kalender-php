<?php
include '../connect.php';

//$sql = "INSERT INTO birthdays (person, day, month , year) VALUES ('Kees', '2', '2', '1990')";



if ((isset($_POST['persoon'])) and (isset($_POST['maand'])) and (isset($_POST['dag'])) and (isset($_POST['jaar']))) {
    $sql = "INSERT INTO birthdays (person, month, day, year) VALUES ('" . $_POST['persoon'] . "'," . $_POST['maand'] . "," . $_POST['dag'] . "," . $_POST['jaar'] . ")";

   if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
     header('Location: ../index.php');
    } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
    <form action="create.php" method="post" enctype="multipart/form-data">
        Name<input type="text" name="persoon">
        day<input type="number" name="dag">
        month<input type="number" name="maand">
        Year of birth<input type="number" name="jaar">
        Create<input type="submit">
    </form>
  </body>
</html>
