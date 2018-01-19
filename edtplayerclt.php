<?php

require_once 'dbconnect.php';

$sql = "SELECT * FROM Player WHERE Player_ID='".$_REQUEST['Player_ID']."'"; 

if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
$row = $result->fetch_assoc();
?>

<form action='edtplayersrv.php'>
Bat_Hand <input name="Bat_Hand" value="<?php echo $row['Bat_Hand']?>"></br>
First_Name <input name="First_Name" value="<?php echo $row['First_Name']?>"></br>
Last_Name <input name="Last_Name" value="<?php echo $row['Last_Name']?>"></br>
Player_ID <input name="Player_ID" value="<?php echo $row['Player_ID']?>"></br>
Player_Number <input name="Player_Number" value="<?php echo $row['Player_Number']?>"></br>
Throws_Hand <input name="Throws_Hand" value="<?php echo $row['Throws_Hand']?>"></br>
<input type="submit" value="Save">
</form>