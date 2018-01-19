<?php
include 'menu.php';
require_once 'dbconnect.php';

$sql = "select * from Roster";
if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
echo '<table border=5>';
echo '<tr><th>Player_ID</th><th>Position_ID</th><th>Roster_ID</th><th>Roster_Name</th><th>Season_ID</th><th>Team_ID</th><th>Actions</th></tr>';
while($row = $result->fetch_assoc()) {
  echo '<tr>';
  echo '<td>' . $row['Player_ID'] . '</td>';
  echo '<td>' . $row['Position_ID'] . '</td>';
  echo '<td>' . $row['Roster_ID'] . '</td>';
  echo '<td>' . $row['Roster_Name'] . '</td>';
  echo '<td>' . $row['Season_ID'] . '</td>';
  echo '<td>' . $row['Team_ID'] . '</td>';
  echo "<td><a href='edtrosterclt.php?Roster_ID=" . $row['Roster_ID'] . "&Name=" . $row['Roster_Name'] . "'>EDIT</a>" . ' ';
  echo "<a href='delrostersrv.php?Roster_ID=" . $row['Roster_ID'] . "&Player_ID=" . $row['Player_ID'] . "'>DEL</a>" . '</td>';
  echo '</tr>';
}
echo '</table>';

?>
<a href='addrosterclt.php'>Add New Roster</a>
</br>
<a href='Menu.php'>Return to Menu</a>