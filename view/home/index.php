<?php
foreach($birthdays as $row){
  $monthnames = array('January',	'February',	'March',	'April',	'May',	'June',	'July',	'August',	'September',	'October',	'November',	'December');
  $month = $monthnames[$row["month"]];

  if ($currentmonth != $row["month"]) { //maakt een maand aan als deze nog niet bestaat.
    echo "<h1>".$month. "</h1>" ;
  }
  if ($currentday != $row["day"]) { //maakt een dag aan als deze nog niet bestaat.
    echo "<h2>". $row["day"]. "</h2>";
  }
  echo "<p><a href=\"".$URL."Home/edit?id=".$row['id']."\">".$row["person"]."(".$row["year"].")</a><a href=\"".$URL."Home/delete?id=".$row['id']."\">x</a></p>";
  $currentmonth = $row["month"];
  $currentday = $row["day"];
}
?>
<p><a href="<?=URL?>Home/addPerson\">+ Toevoegen</a></p>
