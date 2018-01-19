<?php

require_once 'dbconnect.php';

$sql = "SELECT * FROM Position WHERE Position_ID='".$_REQUEST['Position_ID']."'"; 

if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
$row = $result->fetch_assoc();
?>

<form action='edtpositionsrv.php'>
Position_ID <input name="Position_ID" value="<?php echo $row['Position_ID']?>"></br>
Abbreviation <input name="Abbreviation" value="<?php echo $row['Abbreviation']?>"></br>
Description <input name="Description" value="<?php echo $row['Description']?>"></br>
<input type="submit" value="Save">
</form>