<?php
$server="localhost";
$username="root";
$password="Singh@9411";
$con=mysqli_connect($server,$username,$password);

global $rollno;
global $Name;
global $Phone;
global $email;
global $Password;
if (!$con){
    echo"no";
    die("connection to this database failed due to".mysqli_connect_error());
}
if(isset($_POST['rollno'])){
    $rollno =$_POST['rollno']; 
}
if(isset($_POST['Name'])){
    $Name = $_POST['Name'];
}
if(isset($_POST['Phone'])){
    $Phone = $_POST['Phone'];
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
}
if(isset($_POST['password'])){
    $Password = $_POST['password'];
}
$sql="INSERT INTO studentdata.student ( Rollnunber , Name , PhoneNumber , Email , Password ) VALUES ('$rollno' ,  '$Name' , '$Phone', '$email' , '$Password')";
if($con->query($sql)==true)
{
    echo"sucessfully executed";
}
else{
    echo"error$sql <br> $con->error";
}
$con->close();
// INSERT INTO `student` (`RollNunber`, `Name`, `PhoneNumber`, `Email`, `Password`) VALUES ('21313', 'Kanishk', '9988776655', 'Kanishk@gmail.com', '99887766');

header('location:Addstudent.php');
?>