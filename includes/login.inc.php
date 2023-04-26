<?php

if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../Signup.php?error=emptyinput");
        exit();
    }



}