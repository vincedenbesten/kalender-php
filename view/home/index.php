<?php
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
    echo "<p><a href=\"controller/edit.php?id=". $row['id']. "\"". ">". $row["person"]. " (". $row["year"]. ")</a><a href=\"controller/delete.php?id=". $row['id']. "\">x</a></p>";
    $currentmonth = $row["month"];
    $currentday = $row["day"];
  }
  echo "<p><a href=\"controller/create.php\">+ Toevoegen</a></p>";
}
?>
