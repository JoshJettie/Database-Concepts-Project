<?php
require_once 'dbconnect.php';

$sql = "DELETE from Player where Player_ID='".$_REQUEST['Player_ID']."'";

if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}

?>
<script>window.location='listplayer.php'; </script>