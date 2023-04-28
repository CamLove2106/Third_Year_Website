<?php
    include_once 'header.php';
?>
<body>
    <div class="center">
        <h1>Reset your password</h1>
        <p>AN email will be sent to you with the instructoins on how to reset your password!</p>
        <form action="includes/reset-request.inc.php" method="post">
            <div class="txt_field">
                <input type="text" name="email" placeholder="Enter your email address!" required>
                <button type="submit" name="reset-request-submit">Receieve email password reset</button>
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