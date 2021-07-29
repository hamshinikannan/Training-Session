<?php
//Establishing connection
echo "Establishing connection";
$con = mysqli_connect("localhost","root","","student");
echo "<br/>";

//checking for connection
echo "Checking for connectivity errors";
if($con->connect_errno){
    echo "Failed to connect the database.$con->connect_errno";
    echo "<br/>";
} else{
    echo "Connected successfully";
}

//creating table
echo "Creating table<br/>";
$sql = "CREATE TABLE details (
    Regno INT (2) NOT NULL PRIMARY KEY,
    FirstName VARCHAR(30) NOT NULL,
    LastName VARCHAR(30) NOT NULL,
    Salary INT (6),
    Age INT (2)
    )";
if (mysqli_query($con,$sql)) {
    echo "Table created successfully";
}else {
    echo "Error in creating table: " . mysqli_error($con);
}
echo "<br/>";

//inserting values
echo "Inserting the values ";
$sql = "INSERT INTO details(Regno,FirstName,LastName,Salary,Age)
VALUES(12,'Harini','Kannan',25000,25),
    (14,'Mani','Kishore',35000,26),
    (16,'Saveetha','Pandian',20000,22),
    (6,'Durga','Subramani',29000,27),
    (22,'Vimal','Raja',25900,24),
    (4,'Balaji','Ravi',25000,28),
    (1,'Aravindh','Kumar',15000,25)";
echo ($sql."<br/>");
mysqli_query($con,$sql);//executing it
echo ("<hr>");
echo "<br/>";

$sql = "INSERT INTO details(Regno,FirstName,LastName,Salary,Age)
VALUES(12,'Malini','Kalaivannan',25000,25)"; 


//inner join
echo "Inner join";
$sql ="SELECT * FROM studentinfo
INNER JOIN details
ON studentinfo.Regno = details.Regno";
echo $sql."<br/>";
mysqli_query($con,$sql);
echo "<br/>";

//left join
echo "Left join";
$sql= "SELECT * FROM studentinfo
LEFT JOIN details
ON studentinfo.FirstName = details.FirstName";
echo $sql."<br/>";
mysqli_query($con,$sql);
echo "<br/>";

//right join
echo "Left join";
$sql= "SELECT * FROM studentinfo
RIGHT JOIN details
ON studentinfo.FirstName = details.FirstName";
echo $sql."<br/>";
mysqli_query($con,$sql);
echo "<br/>";

//ful join
echo "Full join";
$sql= "SELECT * FROM studentinfo
JOIN details
ON studentinfo.FirstName = details.FirstName";
echo $sql."<br/>";
mysqli_query($con,$sql);
echo "<br/>";

//where clause
echo "where clause";
$sql = "SELECT FirstName FROM studentinfo WHERE FirstName ='Balaji' ";
echo $sql."<br/>";
mysqli_query($con,$sql);
echo "<br/>";