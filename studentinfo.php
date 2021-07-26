<?php
// PHP interaction with MySQL

echo ("Establising the Connection <br/>");
$con = mysqli_connect("localhost","root","","student");//creating connection
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

//--------------------------------------
echo "Creating table<br/>";
$sql = "CREATE TABLE mothertongue (
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    language VARCHAR(20)
    )";
if (mysqli_query($con,$sql)) {
    echo "Table created successfully";
}else {
    echo "Error in creating table: " . mysqli_error($con);
}
echo "<br/>";
//-----------------------------------
echo "Altering table<br/>";
$sql = "ALTER TABLE mothertongue
        ADD favplace VARCHAR(20) NOT NULL";
if (mysqli_query($con,$sql)){
    echo "Table altered successfully";
}else {
    echo "Error in altering table: ". mysqli_error($con);
}
echo "<br/>";

$sql = "ALTER TABLE mothertongue
        ADD favcolor VARCHAR(10) NOT NULL";
$result = mysqli_query($con,$sql);
echo "<br/>";

//-----------------------------------
echo "Inserting the values ";
$sql = "INSERT INTO mothertongue(firstname,lastname,language,favplace,favcolor)
VALUES('Harini','Kannan','Tamil','Bangalore','pink')";
echo ($sql."<br/>");
mysqli_query($con,$sql);
echo "<br/>";
//--------------------------------
echo "Truncating table";
$sql = "TRUNCATE TABLE mothertongue";
mysqli_query($con,$sql);

//------------------------------------
/*echo "Renaming table"
$fav = "ALTER TABLE mothertongue RENAME TO favourite";
if (mysqli_query($con,$fav)){
    echo "Renamed successfully";
} else{
    echo "Error in renaming table: ".mysqli_error($con);
}*/
?>  