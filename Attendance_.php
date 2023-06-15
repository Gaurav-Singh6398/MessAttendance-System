<?php
$server="localhost";
$username="root";
$password="Singh@9411";
$con=mysqli_connect($server,$username,$password);
if (!$con){
    echo"no"; 
} 
global $rollno;
global $Password;
global $meal;
global $sum;
global $count;
$rollno = $_POST['rollno'];
$Password = $_POST['password'];
$meal = $_POST['meal'];


$sql="select * from studentdata.student where RollNunber='$rollno' and Password='$Password';";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
echo"error$sql <br> $con->error";

if(!$row['Counter'] && $meal=="Breakfast")
{
    
    $sum=$row[$meal]+1;
    $sql="Update studentdata.student set $meal='$sum' ,Counter='1' where  RollNunber='$rollno';";
    $result=mysqli_query($con,$sql);
    echo"$con->error";
}
if(!$row['Count_1'] && $meal=="Lunch")
{
    
    $sum=$row[$meal]+1;
    $sql="Update studentdata.student set $meal='$sum' ,Count_1='1' where  RollNunber='$rollno';";
    $result=mysqli_query($con,$sql);
    echo"$con->error";
}
if(!$row['Count_2'] && $meal=="Snacks")
{
    
    $sum=$row[$meal]+1;
    $sql="Update studentdata.student set $meal='$sum' ,Count_2='1' where  RollNunber='$rollno';";
    $result=mysqli_query($con,$sql);
    echo"$con->error";
}
if(!$row['Count_3'] && $meal=="Dinner")
{
    
    $sum=$row[$meal]+1;
    $sql="Update studentdata.student set $meal='$sum' ,Count_3='1' where  RollNunber='$rollno';";
    $result=mysqli_query($con,$sql);
    echo"$con->error";
} 
header('location:Attendance.php');


?>