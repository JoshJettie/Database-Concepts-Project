<?php
$mysqli = new mysqli('127.0.0.1', 'joshuaj7_test', 'snow123', 'joshuaj7_Josh_Jettie_BaseBall_Project');

if ($mysqli->connect_errno) {
    echo "Errno: " . $mysqli->connect_errno . "</br>";
    echo "Error: " . $mysqli->connect_error . "</br>";
    exit;
}
?>