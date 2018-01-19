<?php
require_once 'dbconnect.php';

$sql = "UPDATE Position SET Abbreviation= '" . $_REQUEST['Abbreviation'] . "',Description= '" . $_REQUEST['Description'] . "' WHERE Position_ID=".$_REQUEST['Position_ID'].""; 


if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}

?>
<script>window.location='listposition.php'; </script>