<?php
    include_once 'header.php';
?>
<body>
    <div class="center">
        <h1>Sign Up</h1>
        <form action="includes/signup.inc.php" method="post">
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
            <button type="submit" name="submit">Sign Up</button>
            <div class="signup_link">
                Go back to log in? <a href="Login.php">Click Here</a>
                <?php
                if (isset($_GET["newpwd"])) {
                    if ($_GET["newpwd"] == "passwordupdated") {
                        echo '<p class = "signupsuccess">Your password has been reset!</p>';
                
                    }
                }
                ?>
                <a href="reset-password.php">Forgot your password?</a>
            </div>
        </form>
    </div>

    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p> Fill in all the fields!</p>";
            }
            else if ($_GET["error"] == "invaliduid") {
                echo "<p> Choose a proper username!</p>";
            }
            else if ($_GET["error"] == "invalidemail") {
                echo "<p> Choose a proper email address!</p>";
            }
            else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords don't match!</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, Try again!</p>";
            }
            else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username already taken!</p>";
            }
            else if ($_GET["error"] == "none") {
                echo "<p>You have signed up!</p>";
            }
        }
    ?>

<?php
    include_once 'footer.php';
?>