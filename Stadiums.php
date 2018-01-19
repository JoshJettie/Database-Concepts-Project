<?php

include 'dbconnect.php';

$sql = "select * from Stadium";
if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
echo '<table border=2>';
echo '<tr><th>Location</th><th>Name</th><th>Stadium_ID</th></tr>';
while($row = $result->fetch_assoc()) {
  echo '<tr>';
  echo '<td>' . $row['Location'] . '</td>';
  echo '<td>' . $row['Name'] . '</td>';
  echo '<td>' . $row['Stadium_ID'] . '</td>';
  echo '</tr>';
}
echo '</table>';

?>