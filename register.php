<!doctype html>
<!--HTML5 doctype declaration -->
<html lang="en">
<!--default language of the document content -->

<head>
    <meta charset="utf-8"><!--character encoding for the document (Unicode) -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registeration Page</title><!--web page title -->
    <link href="Login_page.css" rel="stylesheet">
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
                <input type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Register"><a href="startPage.html"></a>
            <div class="signup_link">
                Go Back? <a href="index.html">Click Here</a>
            </div>
        </form>
    </div>



    <footer>
        <!--Footer content -->
        <nav class="footer">
            <small>&copy; 2023, Cameron Love. <a href="mailto:C.love1@uni.brighton.ac.uk">Email Cameron Love</a></small>
        </nav>
    </footer>

</body><!--Close 'body' -->


</html><!--Close 'html' -->