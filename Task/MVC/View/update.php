<?php
include '../../database.php';
include_once "../Model/update.php";
$id = $_GET['id'];
$user = new Model;
$row =$user->getUser($id);
$sql = "SELECT * FROM useraccount WHERE id=$id ";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_assoc($result);

$username = $row['username'];
$email = $row['email'];
$password = $row['password'];
$fileUpload = $row['fileupload'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update </title>
        <link rel="stylesheet" href="../../assets/CSS/signup.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>Update </h2>
            </div>
            <form action="../Controller/update.php" method="POST" onsubmit="return validate();"  class="form">
                <div class="form-control">
                    <table class="field">
                        <tr>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                        </tr>
                        <tr>
                            <td><label for="username" name="username">Name</label></td>
                            <td>
                                <input id="txtUserName" type="text" name="username" value="<?php echo $username;?>"/><br>
                                <span id="name_error_message"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="email" name="email">Email</label></td>
                            <td>
                                <input id="txtEmail" type="text" name="email" value="<?php echo $email;?>"/><br>
                                <span id="email_error_message"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="password" name="password">Password</label></td>
                            <td>
                                <input id="txtpassword" type="password" min="8" max="15" name="password"value="<?php echo $password;?>"/><br>
                                <span id="password_error_message"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Upload</label></td>
                            <td>
                                <input type="file" id="filename" name="fileupload" value="<?php echo $fileupload;?>"/><br>
                                <span id="fileupload_error_message"></span>
                            </td>
                        </tr>
                    </table>
                    <br> 
                    <div class="btn"> 
                        <input type="submit" name="update" value="UPDATE">
                    </div>       
                </div>
            </form>
        </div>
        <script src="../../assets/JS/signup.js"></script>
    </body>
</html>