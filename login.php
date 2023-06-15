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
$sqla="Select *from studentdata.Admin where RollNunber='$rollno' and Password='$Password';";
$resulta= mysqli_query($con,$sqla);
$count1=mysqli_num_rows($resulta);

if( mysqli_num_rows($resulta)!=0)
{
    $_SESSION["roll_no"] = $rollno;
    echo"sucessfully executed1";
    header('location:Admin.php');
}
if(isset($_POST['username'])){
    $rollnoa=$_POST['username']; 
}

if(isset($_POST['password'])){
    $Passworda = $_POST['password'];
}
$sql="Select * from studentdata.student where RollNunber= '$rollnoa' and Password= '$Passworda';";
$result= mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if( mysqli_num_rows($result)!=0)
{
    $_SESSION["roll_no"] = $rollnoa;
    header('location:Display1.php');
}
$con->close();
// INSERT INTO `student` (`RollNunber`, `Name`, `PhoneNumber`, `Email`, `Password`) VALUES ('21313', 'Kanishk', '9988776655', 'Kanishk@gmail.com', '99887766');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login_.css">
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
    <div class="overbody overbody2">
        
    <form class="formcon2 formcon" action="login.php" method="post">
        <h1>Login</h1>
        <div>
            <label>Username</label><br>
            <input type="text" placeholder="Enter your Username" name="username" id="Username">
        </div>
        <div>
            <label>Password</label><br>
            <input type="password" placeholder="Enter your Password" id="password" name="password"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
        </div>
        <div>
            <div class="button">
                <button class="btn">Submit</button>
                <?php
                ?>
            </div>
        </div>
    </form>
    </div>
</body>
</html>
