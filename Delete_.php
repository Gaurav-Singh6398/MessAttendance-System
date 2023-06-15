<?php
session_start();
$server="localhost";
$username="root";
$password="Singh@9411";
$con=mysqli_connect($server,$username,$password);
global $count;
global $rollno;
global $Name;
global $Phone;
global $Email;
global $Password;
global $row;
$a=0;
if (!$con){
    echo"no";
    die("connection to this database failed due to".mysqli_connect_error());
}
if(isset($_POST['rollno'])){
    $rollno =$_POST['rollno']; 
    echo $rollno;
    $sql="DELETE from studentdata.student where RollNunber ='$rollno';";}
if(isset($_POST['Name'])){
    $Name = $_POST['Name'];
    echo $Name;
$sql="DELETE from studentdata.student where Name ='$Name';";}
if(isset($_POST['PhoneNunber'])){
    $Phone = $_POST['PhoneNunber'];
    echo $Phone;
$sql="DELETE from studentdata.student where Phonenumber ='$Phone';";}
if(isset($_POST['Email'])){
    $Email = $_POST['Email'];
    echo $Email;
$sql="DELETE from studentdata.student where Email ='$Email';";}
$result=mysqli_query($con,$sql);
header('location:Admin.php');
echo $sql;
$con->close();
?>

