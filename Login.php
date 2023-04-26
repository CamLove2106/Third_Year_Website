<?php
    include_once 'header.php';
?>

<body>
    <!--Markup all web page content inside the 'body' tags -->
    <div class="center">
        <h1>Login</h1>
        <form action="includes/login.inc.php" method="post">
            <div class="txt_field" id="First_Name">
                <input type="text" name="uid" placeholder="Username/Email" required>
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
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p> Fill in all the fields!</p>";
            }
            else if ($_GET["error"] == "wronglogin") {
                echo "<p> Incorrect login information!</p>";
            }     
        }
    ?>


<?php
    include_once 'footer.php';
?>