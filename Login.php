<?php
    include_once 'header.php';
?>

<body>
    <!--Markup all web page content inside the 'body' tags -->
    <div class="center">
        <h1>Login</h1>
        <form action="login.inc.php" method="post">
            <div class="txt_field" id="First_Name">
                <input type="text" name="name" placeholder="Username/Email" required>
            </div>
            <div class="txt_field">
                <input type="password" name="pwd" placeholder="Password" required>
            </div>
            <button type="submit" name="Submit">Log In</button>
            <div class="signup_link">
                Not a member? <a href="register.html">Sign Up</a>
            </div>
        </form>
    </div>



<?php
    include_once 'footer.php';
?>