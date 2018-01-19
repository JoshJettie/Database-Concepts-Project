<?php

require_once 'dbconnect.php';

$sql = "SELECT * FROM Team WHERE Team_ID='".$_REQUEST['Team_ID']."'"; 

if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
$row = $result->fetch_assoc();
?>

<form action='edtteamsrv.php'>
Team_ID <input name="Team_ID" value="<?php echo $row['Team_ID']?>"></br>
Name <input name="Name" value="<?php echo $row['Name']?>"></br>
Location <input name="Location" value="<?php echo $row['Location']?>"></br>
<input type="submit" value="Save">
</form>