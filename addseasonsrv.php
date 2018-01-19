<?php

include 'dbconnect.php';

$sql = "insert into Season (End_Date,Season_ID,Start_Date) values ('$_REQUEST[End_Date]',' $_REQUEST[Season_ID]', '$_REQUEST[Start_Date]')";





if (!$result = $mysqli->query($sql)) {
    echo "Error: SQL Error: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
   
    exit;
}
?>
<script>window.location='listseason.php'; </script>