<?php
require_once 'dbconnect.php';

$sql = "UPDATE Roster SET Player_ID= '" . $_REQUEST['Player_ID'] . "' WHERE Roster_ID=".$_REQUEST['Roster_ID'].""; 


if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}

?>
<script>window.location='listroster.php'; </script>