<?
  include '../connect.php';

  $sql = "SELECT * FROM birthdays ORDER BY month, day, year ASC;";

  $sql = "DELETE FROM birthdays WHERE id=$_GET[id]";

  if ($conn->query($sql) === TRUE) {
      header('Location: ../index.php');
  } else {
      echo "Error deleting record: " . $conn->error;
  }
?>
