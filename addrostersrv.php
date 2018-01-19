<?php

include 'dbconnect.php';

$sql = "insert into Roster (Team_ID,Season_ID,Roster_Name,Position_ID,Roster_ID,Player_ID) values ('$_REQUEST[Team_ID]',' $_REQUEST[Season_ID]', '$_REQUEST[Roster_Name]' , '$_REQUEST[Player_ID]' , '$_REQUEST[Roster_ID]' , '$_REQUEST[Position_ID]')";





if (!$result = $mysqli->query($sql)) {
    echo "Error: SQL Error: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
   
    exit;
}
?>

<script>window.location='listroster.php'; </script>