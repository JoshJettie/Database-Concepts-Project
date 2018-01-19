<?php

include 'dbconnect.php';

$sql = "insert into Player (Bat_Hand,First_Name,Last_Name,Player_ID,Player_Number,Throws_Hand) values ('$_REQUEST[Bat_Hand]',' $_REQUEST[First_Name]', '$_REQUEST[Last_Name]' , '$_REQUEST[Player_ID]' , '$_REQUEST[Player_Number]' , '$_REQUEST[Throws_Hand]')";





if (!$result = $mysqli->query($sql)) {
    echo "Error: SQL Error: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
   
    exit;
}
?>
<script>window.location='listplayer.php'; </script>