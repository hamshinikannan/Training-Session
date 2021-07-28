<?php
//establishing connection
echo "Establishing connection";
$con = mysqli_connect("localhost","root","","student");
echo "<br/>";

//connectivity errors
echo "Checking for connectivity errors<br/>";
if($con->connect_errno){
    echo "Failed to connect ";
} else{
    echo "Connected Successfully";
}
echo "<br/>";

//inserting values
echo "inserting values";
$sql = "INSERT INTO mothertongue (firstname,lastname,language,favplace,favcolor) 
VALUES ('Harini','Kannan','English','Mysore','Green')";
echo $sql."<br/>";
mysqli_query($con,$sql);

//updating values
echo "updating values";
$sql = "UPDATE studentinfo SET City = 'Karur' WHERE FirstName= 'Chandru' AND LastName = 'Ravi' "; 
mysqli_query($con,$sql);

//deleting values
echo "Deleting values";
$sql= "DELETE FROM studentinfo WHERE FirstName = 'Hamshini' ";
mysqli_query($con,$sql);

//selecting values
$sql= "SELECT FirstName,LastName FROM studentinfo ";
mysqli_query($con,$sql);

//subquery
$sql ="SELECT FirstName, city FROM studentinfo  
    WHERE Regno IN (SELECT Regno FROM studentinfo)";
mysqli_query($con,$sql);

//subquery with comparison operator
$sql = "SELECT * FROM studentinfo   
WHERE Regno IN (SELECT Regno FROM studentinfo   
      WHERE Marks > 400)";
mysqli_query($con,$sql);

//subquery with max function
$sql = "SELECT FirstName, city, Marks FROM studentinfo   
WHERE Marks = (SELECT MAX(Marks) FROM studentinfo)";
mysqli_query($con,$sql);
