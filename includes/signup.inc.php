<?php

if (isset($_POST["submit"])) {
    echo "It works";
}
else {
    header("location: ../Signup.php");
}