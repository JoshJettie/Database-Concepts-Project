<?php

require_once 'dbconnect.php';

$sql = "delete from Season where Season_ID=" . $_REQUEST['Season_ID']; 

if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
$row = $result->fetch_assoc();
?>

<form action='edtseasonsrv.php'>
Season_ID <input name="Season_ID" value="<?php echo $row['Season_ID']?>"></br>
Start_Date <input name="Start_Date" value="<?php echo $row['Start_Date']?>"></br>
End_Date <input name="End_Date" value="<?php echo $row['End_Date']?>"></br>
<input type="submit" value="Save">
</form>