<?php

require_once 'dbconnect.php';

$sql = "SELECT * FROM Roster WHERE Roster_ID='".$_REQUEST['Roster_ID']."'"; 

if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
$row = $result->fetch_assoc();
?>

<form action='edtrostersrv.php'>
Player_ID <input name="Player_ID" value="<?php echo $row['Player_ID']?>"></br>
Position_ID <input name="Position_ID" value="<?php echo $row['Position_ID']?>"></br>
Roster_ID <input name="Roster_ID" value="<?php echo $row['Roster_ID']?>"></br>
Roster_Name <input name="Roster_Name" value="<?php echo $row['Roster_Name']?>"></br>
Season_ID <input name="Season_ID" value="<?php echo $row['Season_ID']?>"></br>
Team_ID <input name="Team_ID" value="<?php echo $row['Team_ID']?>"></br>
<input type="submit" value="Save">
</form>