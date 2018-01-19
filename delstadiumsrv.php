<?php
require_once 'dbconnect.php';

$sql = "delete from Stadium where Stadium_ID='" . $_REQUEST['Stadium_ID']."'";

if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}

?>