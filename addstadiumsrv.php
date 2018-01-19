<?php

include 'dbconnect.php';

$sql = "insert into Stadium (Location,Name,Stadium_ID) values ('$_REQUEST[Location]',' $_REQUEST[Name]', '$_REQUEST[Stadium_ID]')";





if (!$result = $mysqli->query($sql)) {
    echo "Error: SQL Error: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
   
    exit;
}
?>
