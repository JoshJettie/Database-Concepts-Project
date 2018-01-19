<?php
require_once 'dbconnect.php';

$sql = "delete from Game where Game_ID='" . $_REQUEST['Game_ID']."'";

if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}

?>
<script>window.location='listgame.php'; </script>