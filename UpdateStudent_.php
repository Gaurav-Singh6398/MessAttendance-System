<?php 
session_start();
 $server="localhost";
 $username="root";
 $password="Singh@9411";
 $con=mysqli_connect($server,$username,$password);
global $rollno;
 global $Name;
 global $Phone;
 global $email;
 global $Password;
 global $row;
 global $sql;
 $temp=$_SESSION["Hellow"];
 if (!$con){
     echo"no";
     die("connection to this database failed due to".mysqli_connect_error());
 }
 if(isset($_POST['Name'])){
     $Name =$_POST['Name']; 

 }
 if(isset($_POST['Phone'])){
    $Phone =$_POST['Phone']; 

}
if(isset($_POST['email'])){
    $email =$_POST['email']; 

}
$sql="Update studentdata.student set Name='$Name',PhoneNumber='$Phone',Email='$email' where RollNunber='$temp';";
$result=mysqli_query($con,$sql);
if($con->query($sql)==true)
{
    echo"sucessfully executed";
}
header('location:Admin.php');
$con->close();
?>