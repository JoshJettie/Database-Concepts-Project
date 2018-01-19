<?php

include 'dbconnect.php';

$sql = "insert into Position (Abbreviation,Description,Position_ID) values ('$_REQUEST[Abbreviation]',' $_REQUEST[Description]', '$_REQUEST[Position_ID]')";





if (!$result = $mysqli->query($sql)) {
    echo "Error: SQL Error: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
   
    exit;
}
?>
<script>window.location='listposition.php'; </script>