<?php

include 'dbconnect.php';

$sql = "select * from Team";
if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
echo '<table border=2>';
echo '<tr><th>Team_ID</th><th>Name</th><th>Location</th></tr>';
while($row = $result->fetch_assoc()) {
  echo '<tr>';
  echo '<td>' . $row['Team_ID'] . '</td>';
  echo '<td>' . $row['Name'] . '</td>';
  echo '<td>' . $row['Location'] . '</td>';
  echo '</tr>';
}
echo '</table>';

?>