
<!DOCTYPE html>
<html>
    <head>
        <title>SIGNIN page</title>
        <link rel = "stylesheet" href= "assets/CSS/signin.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>Sign In </h2>
            </div>
            <form action="signincontroller.php" method="POST" onsubmit="return validate();" class="form">
                <div class="form-control">
                    <table class="field">
                        <tr>
                            <td><label for="email" name="email">Email</label></td>
                            <td>
                                <input id="txtEmail" type="text" name="email"/><br>
                                <span id="email_error_message"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="password" name="password">Password</label></td>
                            <td>
                                <input id="txtpassword" type="password" min="8" max="15" name="password"/><br>
                                <span id="password_error_message"></span>
                            </td>
                        </tr>
                    </table>
                    <br> 
                    <div class="btn"> 
                        <input type="submit" value="SIGNIN">
                    </div><br>
                    <div id="signup" style="text-align: center;"><a href="signup.php">Don't have an account</a></div>
                </div>
            </form>
        </div>
        <script src="assets/JS/signin.js"></script>
    </body>
</html>