<?php

include 'dbconnect.php';

$sql = "select * from Trades";
if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
echo '<table border=2>';
echo '<tr><th>From_Team</th><th>To_Team</th><th>Player_Name</th></tr>';

while($row = $result->fetch_assoc()) {
  echo '<tr>';

  echo '<td>' . $row['From_team'] . '</td>';
  echo '<td>' . $row['player_name'] . '</td>';
  echo '<td>' . $row['To_team'] . '</td>';


  echo '</tr>';
}
echo '</table>';

?>