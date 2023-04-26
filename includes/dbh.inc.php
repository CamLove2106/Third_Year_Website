<?php

$servername = "";
$dbUsername = "";
$dbPassword = "";
$dbName = "CLient_DB";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}