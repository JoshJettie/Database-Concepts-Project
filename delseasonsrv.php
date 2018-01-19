<?php
require_once 'dbconnect.php';

$sql = "DELETE from Season where Season_ID='".$_REQUEST['Season_ID']."'";

if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}

?>
<script>window.location='listseason.php'; </script>