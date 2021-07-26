<?php

// PHP interaction with MySQL

echo ("Estabising the Connection <br/>");
$con = mysqli_connect("localhost","root","","addressbook");//creating connection
//mysqli_connect("string host", "string username", "string password","database name");
echo ("<hr>");
echo ("<br/>");


//---------------------------------------
echo "Check for Connectivity errors<br/>";
if($con->connect_errno){
    echo "Failed to connect to the database". $con->connect_errno;
}
else{
    echo "Connection Successful";
}
echo "<hr>";
echo "<br/>";


//----------------------------------------
echo "Display the contents<br/>";
$sql = "SELECT * FROM contacts";
echo($sql."<br/>");
$result = mysqli_query($con,$sql);// connecting query
while($row = mysqli_fetch_array($result)){
    echo $row['fname']." ".$row['lname']." ".$row['phone']." ".$row['email']." ".$row['city'] ;
    echo "<br/>";
}
echo "<hr>";


//---------------------------------------
echo "Inserting the values ";
$sql = "INSERT INTO contacts(fname,lname,phone,email,city)
VALUES('Harini','Kannan','8637364327','harini@gmail.com','CBE')";
echo ($sql."<br/>");
mysqli_query($con,$sql);//executing it
echo ("<hr>");


//----------------------------------------
echo "Display the contents<br/>";
$sql = "SELECT * FROM contacts";
echo($sql."<br/>");
$result = mysqli_query($con,$sql);// connecting query
while($row = mysqli_fetch_array($result)){
    echo $row['fname']." ".$row['lname']." ".$row['phone']." ".$row['email']." ".$row['city'] ;
    echo "<br/>";
}
echo "<hr>";
echo "<br/>";
//---------------------------------------

echo "Updating the table<br/>";
$sql = "UPDATE contacts SET city = 'Coimbatore' WHERE city ='CBE';";
echo($sql."<br/>");
mysqli_query($con,$sql);
echo("<hr>");

//----------------------------------------
echo "Display the contents<br/>";
$sql = "SELECT * FROM contacts";
echo($sql."<br/>");
$result = mysqli_query($con,$sql);// connecting query
while($row = mysqli_fetch_array($result)){
    echo $row['fname']." ".$row['lname']." ".$row['phone']." ".$row['email']." ".$row['city'] ;
    echo "<br/>";
}
echo "<hr>";
echo "<br/>";


//----------------------------------------
echo "Deleting a row<br/>";
$sql = "DELETE FROM contacts WHERE city = 'Namakkal';";
echo $sql."<br/>";
mysqli_query($con,$sql);
echo "<hr>";

//----------------------------------------
echo "Display the contents<br/>";
$sql = "SELECT * FROM contacts";
echo($sql."<br/>");
$result = mysqli_query($con,$sql);// connecting query
while($row = mysqli_fetch_array($result)){
    echo $row['fname']." ".$row['lname']." ".$row['phone']." ".$row['email']." ".$row['city'] ;
    echo "<br/>";
}
echo "<hr>";
echo "<br/>";

//---------------------------------------
echo ("Close the connection <br/>");
mysqli_close($con);
echo "<hr>";

?>