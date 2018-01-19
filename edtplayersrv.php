<?php
require_once 'dbconnect.php';

$sql = "UPDATE Player SET 
First_Name='".$_REQUEST['First_Name']."',
Last_Name='".$_REQUEST['Last_Name']."',
Bat_Hand='".$_REQUEST['Bat_Hand']."',
Player_Number='".$_REQUEST['Player_Number']."',
Throws_Hand='".$_REQUEST['Throws_Hand']."'  

WHERE PLayer_ID=".$_REQUEST['Player_ID'].""; 


if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}

?>
<script>window.location='listplayer.php'; </script>