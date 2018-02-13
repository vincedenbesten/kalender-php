<?php
$servername = "localhost";
$username = "calendar_user";
$password = "123";
$dbname = "calendar";
$month = array('January',	'February',	'March',	'April',	'May',	'June',	'July',	'August',	'September',	'October',	'November',	'December');


//----------------------------------------------------------------------------//
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//----------------------------------------------------------------------------//

$sql = "SELECT person, day, month, year, id FROM birthdays ORDER BY month, day ASC;";
$result = $conn->query($sql);

var_dump($result);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $row["id"]. $row["person"]. " ". $row["year"]. "-". $row["day"]. "-". $row["month"]. "<br>";
  }
}
?>

<!doctype html>
<html>
	<head>
		<title>Verjaardagskalender</title>
    <link href="main.css" rel="stylesheet" type="text/css">
	</head>

	<body>
    <p><?php if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo $row["id"]. $row["person"]. " ". $row["year"]. "-". $row["day"]. "-". $row["month"]. "<br>";
      }
    }
    ?></p>
	</body>
</html>
