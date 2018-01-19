<?php
require_once 'dbconnect.php';

$sql = "UPDATE Season SET 
Start_Date='".$_REQUEST['Start_Date']."',
End_Date='".$_REQUEST['End_Date']."' 


WHERE Season_ID=".$_REQUEST['Season_ID'].""; 


if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}

?>
<script>window.location='listseason.php'; </script>