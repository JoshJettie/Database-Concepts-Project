<?php

include 'dbconnect.php';

$sql = "select * from Game";
if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
echo '<table border=2>';
echo '<tr><th>Away_Team_ID</th><th>Date</th><th>Game_ID</th><th>Home_Team_ID</th><th>Stadium</th></tr>';

while($row = $result->fetch_assoc()) {
  echo '<tr>';

  echo '<td>' . $row['Away_Team_ID'] . '</td>';
  echo '<td>' . $row['Date'] . '</td>';
  echo '<td>' . $row['Game_ID'] . '</td>';
  echo '<td>' . $row['Home_Team_ID'] . '</td>';
  echo '<td>' . $row['Stadium'] . '</td>';


  echo '</tr>';
}
echo '</table>';

?>