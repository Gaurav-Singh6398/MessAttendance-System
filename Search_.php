<?php
session_start();
$server="localhost";
$username="root";
$password="Singh@9411";
$con=mysqli_connect($server,$username,$password);
global $a;
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
    $sql="select *from studentdata.student where RollNunber like '%$rollno%';";}
if(isset($_POST['Name'])){
    $Name = $_POST['Name'];
$sql="select *from studentdata.student where Name like '%$Name%';";}
if(isset($_POST['PhoneNunber'])){
    $Phone = $_POST['PhoneNunber'];
$sql="select *from studentdata.student where Phonenumber %like '%$Phone%';";}
if(isset($_POST['Email'])){
    $Email = $_POST['Email'];
$sql="select *from studentdata.student where Email like '%$Email%';";}
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);


if($count==0)
{
    echo"error";
}

$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="search_1.css">
</head>
<body>
<nav class ="nav1">
<span class="image">
        <img class="img" src="logo.png">

    <span class="title">MESS ATTENDANCE MANAGEMENT SYSTEM

    </span>
</span>
</nav>
<nav class="nav">
<span>
    <a href=Admin.php>Home</a>
</span>
<span>
    <a href=logout.php>logout</a>
</span>
</nav>  
<div class="overbody">
<table class="table">
   
    <thead class=head>
        <td>Roll Number</td>
        <td>Name</td>
        <td>Phone Number</td>
        <td>Email</td>
    </thead>
    <tbody class="tablebody">
    <?php 
        while ($row=mysqli_fetch_assoc($result)){
        ?>
        <tr class="row">
        <td class="data" ><?php echo $row['RollNunber'];?>
        </td>
        <td class="data"><?php echo $row['Name'];?>
        </td>
        <td class="data"><?php echo $row['PhoneNumber'];?>
        </td>
        <td class="data"><?php echo $row['Email'];?>
        </td>
        </tr>
        <?php }?>
        </tbody>
    </table>
    </div>     
</form>
</body>
</html>
