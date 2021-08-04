<?php
include '../database.php';
class Model{
    public function displayValues(){
        /*
         * selects the value from useraccount table and displays the record in table
         */
        $sql = "SELECT * FROM useraccount";
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
                            <button><a href="../MVC/View/update.php?id='.$id.'">Update</a></button>
                            <button><a href="delete.php?id='.$id.'">Delete</a></button>
                        </td>
                    </tr>';
                    $i++;
            }
        }
                        
    }
}
?>