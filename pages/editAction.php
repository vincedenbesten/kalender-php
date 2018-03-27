<?php
include '../connect.php';
if ((isset($_POST['persoon'])) || (isset($_POST['maand'])) || (isset($_POST['dag'])) || (isset($_POST['jaar']))) {
  //$sql = "UPDATE birthdays SET person = " . $_POST['persoon'] . ", day = " . $_POST['dag'] . ", month = " . $_POST['maand'] . ", year = " . $_POST['year'] . " WHERE id = " . $_GET['id'];
  $stmt = $conn->prepare("UPDATE birthdays SET person =? , day =?, month =?, year =? WHERE id =? ;");
  $stmt->bind_param("sssss", $_POST['persoon'], $_POST['dag'], $_POST['maand'], $_POST['jaar'], $_GET['id']);
  $stmt->execute();
  $stmt->close();
  $conn->close();
  header('Location: ../index.php');
}
?>
