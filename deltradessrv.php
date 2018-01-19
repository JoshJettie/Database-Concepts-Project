<?php
require_once 'dbconnect.php';

$sql = "delete from Trades where Trade_ID='" . $_REQUEST['Trade_ID']."'";

if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}

?>