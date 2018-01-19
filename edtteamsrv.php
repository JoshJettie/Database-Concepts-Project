<?php
require_once 'dbconnect.php';

$sql = "UPDATE Team SET Location= '" . $_REQUEST['Location'] . "',Name= '" . $_REQUEST['Name'] . "' WHERE Team_ID=".$_REQUEST['Team_ID'].""; 


if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}

?>
<script>window.location='listteams.php'; </script>