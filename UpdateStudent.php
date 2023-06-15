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
if (!$con){
    echo"no";
    die("connection to this database failed due to".mysqli_connect_error());
}
if(isset($_POST['rollno'])){
    $rollno =$_POST['rollno']; 
    $sql="select *from studentdata.student where RollNunber= '$rollno';";}
if(isset($_POST['Name'])){
    $Name = $_POST['Name'];
$sql="select *from studentdata.student where Name= '$Name';";}
if(isset($_POST['PhoneNunber'])){
    $Phone = $_POST['PhoneNunber'];
$sql="select *from studentdata.student where Phonenumber='$Phone';";}
if(isset($_POST['Email'])){
    $Email = $_POST['Email'];
$sql="select *from studentdata.student where Email = '$Email';";}

$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

if($count==0)
{
    echo"error";
}
$row=mysqli_fetch_assoc($result);
 $_SESSION["Hellow"] = $row["RollNunber"];
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="UpdateStudent.css">
    
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
        <form class="formcon" action="UpdateStudent_.php" method="post">
             <div>
                <label>Name</label><br>
                <input type="text" placeholder="<?php echo $row['Name'];?>" name="Name" id="Name">
               
            </div>
            <div>
                <label>Phone Number</label><br>

                <input type="text" placeholder="<?php echo $row['PhoneNumber'];?>" name="Phone" id="Phone">
            </div>
            <div>
                <label>Email Id</label><br>

                <input type="email" placeholder="<?php echo $row['Email'];?>" id="email" name="email">
            </div>
           <div>
            <div class="button">
                <button class="btn">Submit</button>
            </div>
    </div>
</form>
</body>
</html>
