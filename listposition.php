<?php
include 'menu.php';
require_once 'dbconnect.php';

$sql = "select * from Position";
if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
echo '<table border=5>';
echo '<tr><th>Abbreviation</th><th>Description</th><th>Position_ID</th><th>Actions</th></tr>';
while($row = $result->fetch_assoc()) {
  echo '<tr>';
  echo '<td>' . $row['Abbreviation'] . '</td>';
  echo '<td>' . $row['Description'] . '</td>';
  echo '<td>' . $row['Position_ID'] . '</td>';
  echo "<td><a href='edtpositionclt.php?Position_ID=" . $row['Position_ID'] . "&Description=" . $row['Description'] . "'>EDIT</a>" . ' ';
  echo "<a href='delpositionsrv.php?Position_ID=" . $row['Position_ID'] . "&Description=" . $row['Description'] . "'>DEL</a>" . '</td>';
  echo '</tr>';
}
echo '</table>';

?>
<a href='addpositionclt.php'>Add New Postiton</a>
</br>
<a href='Menu.php'>Return to Menu</a>