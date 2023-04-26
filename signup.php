<?php
    include_once 'header.php';
?>
<body>
    <div class="center">
        <h1>Sign Up</h1>
        <form action="signup.inc.php" method="post">
            <div class="txt_field">
                <input type="text" name="name" placeholder="Full Name" required>
            </div>
            <div class="txt_field">
                <input type="text" name="email" placeholder="Email Address" required>
            </div>
            <div class="txt_field">
                <input type="text" name="uid" placeholder="Username" required>
            </div>
            <div class="txt_field">
                <input type="password" name="pwd" placeholder="Password" required>
            </div>
            <div class="txt_field">
                <input type="password" name="pwdrepeat" placeholder="Confirm Password" required>
            </div>
            <div class="pass">Forgot Password?</div>
            <button type="submit" name="submit">Sign Up</button>
            <div class="signup_link">
                Go Back? <a href="index.html">Click Here</a>
            </div>
        </form>
    </div>



<?php
    include_once 'footer.php';
?>