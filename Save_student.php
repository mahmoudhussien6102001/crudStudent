<?php

$servername="localhost";
$username="root";
$pass="rootroot";
$dbname="schools";
$conn=new mysqli($servername,$username,$pass,$dbname);
if(!($conn)){
    die("Database connected failed:".$conn->error);
}


if($_SERVER['REQUEST_METHOD']==='POST'){
    $stdName=$_POST['name'];
    $stdAge=$_POST['age'];
    $stdcourse=$_POST['course'];
    $stdaddress=$_POST['address'];
    $sql="insert into student(name,age,course,address) values('$stdName',$stdAge,'$stdcourse','$stdaddress')";
    $result=$conn->query($sql);
    if($result===true){
        echo "<h1 style='text-align:center;color:green;margin: 150px;'>inserted successfully<h1>";
        header('location:getData_student.php');
    }else{
        echo "inserted failed".$conn->error;
    }

}
?>