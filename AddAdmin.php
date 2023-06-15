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
if(isset($_POST['password'])){
    $Password = $_POST['password'];
}
$sql="INSERT INTO studentdata.admin( Rollnunber , Password ) VALUES ('$rollno', '$Password')";
if($con->query($sql)==true)
{
    echo"sucessfully executed";
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
    <link rel="stylesheet" href="Addadmin_.css">
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
<form class="formcon2 formcon" action="AddAdmin.php" method="post">
            <h1>Sign Up</h1>
            <div>
                <label>Username</label><br>
                <input type="text" placeholder="Enter Integer of 5 digit" name="rollno" id="rollno">
            </div>
            <div>
                <label> Password</label><br>
                <input type="password" placeholder="Enter your Password must have 1 Uppercase,1 lowercase and integer " id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
            </div>
            <div class="button">
                <button class="btn">Submit</button>
            </div>
</div>
</body>
</html>