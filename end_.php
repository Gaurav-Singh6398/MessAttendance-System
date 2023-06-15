<?php
$server="localhost";
$username="root";
$password="Singh@9411";
$con=mysqli_connect($server,$username,$password);
session_start();

global $rollno;
global $rollnoa;
global $Name;
global $Phone;
global $email;
global $Password;
global $Passworda;
global $k;
global $count;
global $count1;
$count=1;
$count1=1;

if (!$con){
    echo"no";
    die("connection to this database failed due to".mysqli_connect_error());
}

if(isset($_POST['username'])){
   
    $rollno=$_POST['username']; 
   
}
if(isset($_POST['password'])){
    $Password = $_POST['password'];
}
echo $rollno ;
echo $Password;
$sqla="Select *from studentdata.Admin where RollNunber='$rollno' and Password='$Password';";
$resulta= mysqli_query($con,$sqla);
$count1=mysqli_num_rows($resulta);

if( mysqli_num_rows($resulta)!=0)
{
    $sql="UPDATE `studentdata`.`student` SET `Counter`='0',`Count_1`='0',`Count_2`='0',`Count_3`='0';";
    $resulta= mysqli_query($con,$sql);
    echo"$con->error";
    header('location:Admin.php');
}

?>