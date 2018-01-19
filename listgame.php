<?php
include 'menu.php';
require_once 'dbconnect.php';

$sql = "select * from Game";
if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
echo '<table border=5>';
echo '<tr><th>Away_Team_ID</th><th>Date</th><th>Game_ID</th><th>Home_Team_ID</th><th>Stadium</th><th>Actions</th></tr>';
while($row = $result->fetch_assoc()) {
  echo '<tr>';
  echo '<td>' . $row['Away_Team_ID'] . '</td>';
  echo '<td>' . $row['Date'] . '</td>';
  echo '<td>' . $row['Game_ID'] . '</td>';
  echo '<td>' . $row['Home_Team_ID'] . '</td>';
  echo '<td>' . $row['Stadium'] . '</td>';
  echo "<td><a href='edtgameclt.php?Game_ID=" . $row['Game_ID'] . "&Away_Team_ID=" . $row['Away_Team_ID'] . "'>EDIT</a>" . ' ';
  echo "<a href='delgamesrv.php?Game_ID=" . $row['Game_ID'] . "&Away_Team_ID=" . $row['Away_Team_ID'] . "'>DEL</a>" . '</td>';
  echo '</tr>';
}
echo '</table>';

?>
<a href='addgameclt.php'>Add New Game</a>
</br>
<a href='Menu.php'>Return to Menu</a>

