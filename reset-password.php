<?php
    include_once 'header.php';
?>
<body>
    <div class="center">
        <h1>Reset your password</h1>
        <p>An email will be sent to you with the instructoins on how to reset your password!</p>
        <form action="includes/reset-request.inc.php" method="post">
            <div class="txt_field">
                <input type="text" name="email" placeholder="Enter your email address!" required>
            </div>
            <button type="submit" name="reset-request-submit">Receieve email password reset</button>
        </form>
    </div>

    <?php
        if (isset($_GET["reset"])) {
            if ($_GET["reset"] == "success") {
                echo '<p class="signupsuccess">Check your email!</p>';
        }

    }
    ?>

<?php
    include_once 'footer.php';
?>