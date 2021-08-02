<?php
echo "Establishing connection</br>";
$con = mysqli_connect("localhost","root","","student");
echo "<hr>";
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

 //create procedure
$sql= "DELIMITER //

CREATE PROCEDURE GetSalaryinfo()
BEGIN
	SELECT *  FROM details WHERE Salary>20000;
END //

DELIMITER ; "; 
$result =mysqli_query($con,$sql); 

$sql= "CALL GetSalaryinfo()";
$result = mysqli_query($con,$sql);

//create function
$sql="DELIMITER $$ 
CREATE FUNCTION EmployeeSalary(  
    Salary int  
)   
RETURNS VARCHAR(20)  
DETERMINISTIC  
BEGIN  
    DECLARE EmployeeSalary VARCHAR(20);  
    IF Salary > 20000 THEN  
        SET EmployeeSalary = 'High';  
    ELSEIF (Salary <= 20000 AND   
            Salary >= 10000) THEN  
        SET EmployeeSalary = 'Average';  
    ELSEIF Salary < 10000 THEN  
        SET EmployeeSalary = 'Low';  
    END IF;   
    RETURN (EmployeeSalary);  
END$$ 
DELIMITER ;  ";

$result =mysqli_query($con,$sql); 

$sql= "CALL SELECT 
FirstName, EmployeeSalary(25000)
FROM
details
ORDER BY 
FirstName;";
$result = mysqli_query($con,$sql);