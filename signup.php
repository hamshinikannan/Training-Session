<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="signup.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>Sign Up </h2>
            </div>
            <form action="controller.php" method="POST" onsubmit="return validate();"  class="form">
                <div class="form-control">
                    <table class="field">
                        <tr>
                            <td><label for="username" name="username">Name</label></td>
                            <td>
                                <input id="txtUserName" type="text" name="username"/><br>
                                <span id="name_error_message"></span>
                            </td>
                        </tr>
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
                        <tr>
                            <td><label for="cpassword" name="cpassword">Confirm Password</label></td>
                            <td>
                                <input id="txtcpassword" type="password" min="8" max="15" name="cpassword"/><br>
                                <span id="cpassword_error_message"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Upload</label></td>
                            <td>
                                <input type="file" id="filename" name="fileupload"><br>
                                <span id="fileupload_error_message"></span>
                            </td>
                        </tr>
                    </table>
                    <br> 
                    <div class="btn"> 
                        <input type="submit" value="SIGNUP">
                    </div>       
                </div>
            </form>
        </div>
        <script src="signup.js"></script>
    </body>
</html>