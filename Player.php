<?php

include 'dbconnect.php';

$sql = "select * from Player";
if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
echo '<table border=2>';
echo '<tr><th>Bat_Hand</th><th>First_Name</th><th>Last_Name</th><th>Player_ID</th><th>Player_Number</th><th>Throws_Hand</tr>';

while($row = $result->fetch_assoc()) {
  echo '<tr>';

  echo '<td>' . $row['Bat_hand'] . '</td>';
  echo '<td>' . $row['First_Name'] . '</td>';
  echo '<td>' . $row['Last_Name'] . '</td>';
  echo '<td>' . $row['Player_ID'] . '</td>';
  echo '<td>' . $row['Player_Number'] . '</td>';
  echo '<td>' . $row['Throws_Hand'] . '</td>';

  echo '</tr>';
}
echo '</table>';

?>