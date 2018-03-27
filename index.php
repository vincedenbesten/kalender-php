<?php
include 'connect.php';

$sql = "SELECT * FROM birthdays ORDER BY month, day, year ASC;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $monthnames = array('January',	'February',	'March',	'April',	'May',	'June',	'July',	'August',	'September',	'October',	'November',	'December');
    $month = $monthnames[$row["month"]];

    if ($currentmonth != $row["month"]) {
      echo "<h1>".$month. "</h1>" ;
    }
    if ($currentday != $row["day"]) {
      echo "<h2>". $row["day"]. "</h2>";
    }
    echo "<p><a href=\"pages/edit.php?id=". $row['id']. "\"". ">". $row["person"]. " (". $row["year"]. ")</a><a href=\"pages/delete.php?id=". $row['id']. "\">x</a></p>";
    $currentmonth = $row["month"];
    $currentday = $row["day"];
  }
  echo "<p><a href=\"pages/create.php\">+ Toevoegen</a></p>";
}

$sql = "UPDATE birthdays SET person = henk WHERE id = 21 ";
?>

<!doctype html>
<html>
	<head>
		<title>Verjaardagskalender</title>
    <link href="main.css" rel="stylesheet" type="text/css">
	</head>

	<body>
	</body>
</html>
