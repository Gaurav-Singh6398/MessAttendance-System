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
if (!$con){
    echo"no";
    die("connection to this database failed due to".mysqli_connect_error());
}

if(isset($_POST['username'])){
    $rollnoa=$_POST['username']; 
}

if(isset($_POST['Phonenumber'])){
    $Passworda = $_POST['Phonenumber'];
}
$_SESSION["roll"] = $rollnoa;
$sql="Select * from studentdata.student where RollNunber= '$rollnoa' and PhoneNumber= '$Passworda';";
$result= mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if( mysqli_num_rows($result)!=0)
{
    
    header('location:forgot2.php');
}
else{
    echo "No";
}
$con->close();
?>