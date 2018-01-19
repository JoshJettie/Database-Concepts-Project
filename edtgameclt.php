<?php

require_once 'dbconnect.php';

$sql = "SELECT * FROM Game WHERE Game_ID='".$_REQUEST['Game_ID']."'"; 

if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
$row = $result->fetch_assoc();
?>

<form action='edtgamesrv.php'>
Away_Team_ID <input name="Away_Team_ID" value="<?php echo $row['Away_Team_ID']?>"></br>
Date <input name="Date" value="<?php echo $row['Date']?>"></br>
Game_ID <input name="Game_ID" value="<?php echo $row['Game_ID']?>"></br>
Home_Team_ID <input name="Home_Team_ID" value="<?php echo $row['Home_Team_ID']?>"></br>
Stadium <input name="Stadium" value="<?php echo $row['Stadium']?>"></br>
<input type="submit" value="Save">
</form>