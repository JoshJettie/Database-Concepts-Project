<?php

include 'dbconnect.php';

$sql = "insert into Trades (From_team,Player_name,To_team) values ('$_REQUEST[From_team]',' $_REQUEST[Player_name]', '$_REQUEST[To_team]')";





if (!$result = $mysqli->query($sql)) {
    echo "Error: SQL Error: </br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
   
    exit;
}
?>
