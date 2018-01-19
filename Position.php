<?php

include 'dbconnect.php';

$sql = "select * from Position";
if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
echo '<table border=2>';
echo '<tr><th>Abbreviation</th><th>Description</th><th>Position_ID</th></tr>';

while($row = $result->fetch_assoc()) {
  echo '<tr>';

  echo '<td>' . $row['Abbreviation'] . '</td>';
  echo '<td>' . $row['Description'] . '</td>';
  echo '<td>' . $row['Position_ID'] . '</td>';


  echo '</tr>';
}
echo '</table>';

?>