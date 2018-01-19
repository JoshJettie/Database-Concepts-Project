<?php
require_once 'dbconnect.php';

$sql = "UPDATE Game SET 
Away_Team_ID='".$_REQUEST['Away_Team_ID']."',
Date='".$_REQUEST['Date']."',
Game_ID='".$_REQUEST['Game_ID']."',
Home_Team_ID='".$_REQUEST['Home_Team_ID']."',
Stadium='".$_REQUEST['Stadium']."'  

WHERE Game_ID=".$_REQUEST['Game_ID'].""; 


if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}

?>
<script>window.location='listgame.php'; </script>