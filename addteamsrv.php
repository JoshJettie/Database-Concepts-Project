<?php

include 'dbconnect.php';

$sql = "insert into Team (Location,Name,Team_ID) values ('$_REQUEST[Location]',' $_REQUEST[Name]', '$_REQUEST[Team_ID]')";





if (!$result = $mysqli->query($sql)) {
    echo "Error: SQL Error: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
   
    exit;
}
?>
<script>window.location='listteams.php'; </script>