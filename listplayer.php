<?php
include 'menu.php';
require_once 'dbconnect.php';

$sql = "select * from Player";
if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
echo '<table border=5>';
echo '<tr><th>Bat_Hand</th><th>First_Name</th><th>Last_Name</th><th>Player_ID</th><th>Player_Number</th><th>Throws_Hand<th>Actions</th></tr>';
while($row = $result->fetch_assoc()) {
  echo '<tr>';
  echo '<td>' . $row['Bat_Hand'] . '</td>';
  echo '<td>' . $row['First_Name'] . '</td>';
  echo '<td>' . $row['Last_Name'] . '</td>';
  echo '<td>' . $row['Player_ID'] . '</td>';
  echo '<td>' . $row['Player_Number'] . '</td>';
  echo '<td>' . $row['Throws_Hand'] . '</td>';
  echo "<td><a href='edtplayerclt.php?Player_ID=" . $row['Player_ID'] . "&First_Name=" . $row['First_Name'] . "'>EDIT</a>" . ' ';
  echo "<a href='delplayersrv.php?Player_ID=" . $row['Player_ID'] . "&First_Name=" . $row['First_Name'] . "'>DEL</a>" . '</td>';
  echo '</tr>';
}
echo '</table>';

?>
<a href='addplayerclt.php'>Add New Player</a></br>
</br>
<a href='Menu.php'>Return to Menu</a>