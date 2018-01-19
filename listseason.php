<?php
include 'menu.php';
require_once 'dbconnect.php';

$sql = "select * from Season";
if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
echo '<table border=5>';
echo '<tr><th>End_Date</th><th>Start_Date</th><th>Season_ID</th><th>Actions</th></tr>';
while($row = $result->fetch_assoc()) {
  echo '<tr>';
  echo '<td>' . $row['End_Date'] . '</td>';
  echo '<td>' . $row['Start_Date'] . '</td>';
  echo '<td>' . $row['Season_ID'] . '</td>';
  echo "<td><a href='edtseasonclt.php?End_Date=" . $row['End_Date'] . "&Start_Date=" . $row['Start_Date'] . "'>EDIT</a>" . ' ';
  echo "<a href='delseasonsrv.php?Season_ID=" . $row['Season_ID'] . "&End_Date=" . $row['End_Date'] . "'>DEL</a>" . '</td>';
  echo '</tr>';
}
echo '</table>';

?>
<a href='addseasonclt.php'>Add New Season</a>
</br>
<a href='Menu.php'>Return to Menu</a>