<?php
 $server="localhost";
 $username="root";
 $password="Singh@9411";
 $con=mysqli_connect($server,$username,$password);


global $rollno;
global $Password;
session_start();
if(isset($_POST['Newpassword'])){
   
    $rollno=$_POST['Newpassword']; 
   
}
if(isset($_POST['checkpassword'])){
    $Password = $_POST['checkpassword'];
}


$temp = $_SESSION["roll"];
echo $temp;
$sql="Update studentdata.student set Password='$Password'where RollNunber='$temp';";
$result=mysqli_query($con,$sql);
header('location:login.php');
$con->close();
?>
?>
