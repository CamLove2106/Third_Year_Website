<?php

?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"><!--character encoding for the document (Unicode) -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Final Year Project</title><!--web page title -->
    <link href="Login_page.css" rel="stylesheet" />
    <link href="normalize.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Strait" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, Geneva, sans-serif;
            font-size: 100%;
            background-color: #fff;
        }
    </style>
</head>
<body>
    <!--Markup all web page content inside the 'body' tags -->
    <div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="txt_field" id="First_Name">
                <input type="text" required>
                <span></span>
                <label class="email">Email</label>
            </div>
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login">
            <div class="signup_link">
                Not a member? <a href="register.html">Sign Up</a>
            </div>
        </form>
    </div>



    <footer>
        <nav class="footer">
            <small>&copy; 2023, Cameron Leonard Love <a href="mailto:C.love1@uni.brighton.ac.uk">Email Cameron Love</a></small>
        </nav>
    </footer>
</body>
</html>