<?php 
include "database.php";
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <button><a href = "signup.php"> Add User</a></button>
            <table class="table">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM signup";
                        $result = mysqli_query($con,$sql);

                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            $i=1;
                            while($row = mysqli_fetch_assoc($result)){
                                $id=$row['id'];
                                $username = $row['username'];
                                $email = $row['email'];
                                $password = $row['password'];
                                $fileupload = $row['fileupload'];
                                
                                echo '
                                <tr>
                                    <th scope="row">'.$id.'</th>
                                
                                        <td>'.$username.'</td> 
                                        <td>'.$email.'</td>
                                        <td>'.$password.'</td>
                                        <td>'.$fileupload.'</td>
                                        <td>
                                            <button><a href ="update.php?updateid = '.$id.'">Update</a></button>
                                            <button><a href ="delete.php?deleteid = '.$id.'">Delete</a></button>
                                        </td>
                                </tr>';
                                $i++;
                            }
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </body>
</html> 