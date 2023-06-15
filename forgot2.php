<?php
$server="localhost";
$username="root";
$password="Singh@9411";
$con=mysqli_connect($server,$username,$password);
session_start();

global $rollno;

global $Name;

if (!$con){
    echo"no";
    die("connection to this database failed due to".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="formcon"   action="forgot4.php"method="post">
             <div>
                <label>Email</label><br>
                <input type="text" placeholder="enter your email "name="Name" id="Name">
               
            </div>
            <div class="button">
                <button class="btn">Submit</button>
            </div>
</form>
</body>
</html>


    