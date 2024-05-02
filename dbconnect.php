<?php
$servername="localhost";
$username="root";
$pass="rootroot";
$dbname="schools";
$conn=new mysqli($servername,$username,$pass,$dbname);
if(!($conn)){
    die("Database connected failed:".$conn->error);
}else{
    echo "Database successfully";
}
$conn->close();
?>