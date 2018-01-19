<?php

include 'dbconnect.php';

$sql = "select * from Team Roster";
if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
echo '<table border=5>';
echo '<tr><th>Active</th><th>Description</th><th>Roster_ID</th><th>Roster_Name</th><th>Season_ID</th><th>Team_ID</th></tr>';

while($row = $result->fetch_assoc()) {
  echo '<tr>';

  echo '<td>' . $row['Active'] . '</td>';
  echo '<td>' . $row['Description'] . '</td>';
  echo '<td>' . $row['Roster_ID'] . '</td>';
  echo '<td>' . $row['Roster_Name'] . '</td>';
  echo '<td>' . $row['Season_ID'] . '</td>';
  echo '<td>' . $row['Team_ID'] . '</td>';

  echo '</tr>';
}
echo '</table>';

?>