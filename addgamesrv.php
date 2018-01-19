<?php

include 'dbconnect.php';

$sql = "insert into Game (Away_Team_ID,Date,Game_ID,Home_Team_ID,Stadium) values ('$_REQUEST[Away_Team_ID]','$_REQUEST[Date]', '$_REQUEST[Game_ID]' , '$_REQUEST[Home_Team_ID]' , '$_REQUEST[Stadium]')";





if (!$result = $mysqli->query($sql)) {
    echo "Error: SQL Error: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
   
    exit;
}
?>
<script>window.location='listgame.php'; </script>