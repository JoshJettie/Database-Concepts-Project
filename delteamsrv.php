<?php
require_once 'dbconnect.php';

$sql = "delete from Team where Team_ID=" . $_REQUEST['Team_ID'];

if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}

?>
<script>window.location='listteams.php'; </script>