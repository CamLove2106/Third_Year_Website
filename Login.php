<?php
    include_once 'header.php';
?>

    <!--Markup all web page content inside the 'body' tags -->
    <div class="center">
        <h1>Login</h1>
        <form action="login.inc.php" method="post">
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



<?php
    include_once 'footer.php';
?>