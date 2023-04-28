<?php

if (isset($_POST["reset-request-submit"])) {
    
    $selecter = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "https://jolly-bay-06c537503.3.azurestaticapps.net"

} else {
    header("location:../index.php");
}