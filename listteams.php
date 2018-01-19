<?php
include 'menu.php';
require_once 'dbconnect.php';

$sql = "select * from Team";
if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
echo '<table border=5>';
echo '<tr><th>Location</th><th>Name</th><th>Team_ID</th><th>Actions</th></tr>';
while($row = $result->fetch_assoc()) {
  echo '<tr>';
  echo '<td>' . $row['Location'] . '</td>';
  echo '<td>' . $row['Name'] . '</td>';
  echo '<td>' . $row['Team_ID'] . '</td>';
  echo "<td><a href='edtteamclt.php?Team_ID=" . $row['Team_ID'] . "&Name=" . $row['Name'] . "'>EDIT</a>" . ' ';
  echo "<a href='delteamsrv.php?Team_ID=" . $row['Team_ID'] . "&number=" . $row['Name'] . "'>DEL</a>" . '</td>';
  echo '</tr>';
}
echo '</table>';

?>
<a href='addteamclt.php'>Add New Team</a>
</br>
<a href='Menu.php'>Return to Menu</a>