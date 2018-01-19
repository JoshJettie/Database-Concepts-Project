<?php
require_once 'dbconnect.php';

$sql = "DELETE from Roster where Roster_ID='".$_REQUEST['Roster_ID']."'";

if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}

?>
<script>window.location='listroster.php'; </script>