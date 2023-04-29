<?php
    include_once 'header.php';
?>
<body>
    <div class="center">
        <h1>Registration</h1>
        <form method="post">
            <div class="txt_field" id="first_name">
                <input type="text" required>
                <span></span>
                <label>First Name</label>
            </div>
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Last Name</label>
            </div>
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Company Name</label>
            </div>
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label>Confirm Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Register"><a href="startPage.html"></a>
            <div class="signup_link">
                Go Back? <a href="index.html">Click Here</a>
            </div>
        </form>
    </div>



<?php
    include_once 'footer.php';
?>