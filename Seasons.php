<?php

include 'dbconnect.php';

$sql = "select * from Season";
if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
echo '<table border=2>';
echo '<tr><th>End_Date</th><th>Start_Date</th><th>Season_ID</th></tr>';
while($row = $result->fetch_assoc()) {
  echo '<tr>';
  echo '<td>' . $row['End_Date'] . '</td>';
  echo '<td>' . $row['Start_Date'] . '</td>';
  echo '<td>' . $row['Season_ID'] . '</td>';
  echo '</tr>';
}
echo '</table>';

?>