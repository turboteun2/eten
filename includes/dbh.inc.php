<?php
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
// Name of db
$dBName = "eten";

$conn = mysqli_connect( $servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("CONNECTION FAILED: " .mysqli_connect_error());
}

