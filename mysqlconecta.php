<?php
$host = "localhost";
$user = "root";
//$pass = 'c0n3ct@minas';
$pass = "";
$db   = "cmt";
 
$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} 

?>
