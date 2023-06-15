<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="overbody overbody2">
        
    <form class="formcon2 formcon" action="forgot4.php" method="post">
        <h1>Login</h1>
        <div>
            <label>OTP</label><br>
            <input type="text" placeholder="Enter the otp" name="Onetp" id="otp">
        </div>
<?php
session_start();  
$temp=$_SESSION["otp"];
echo $temp;
?>
        <button class="btn">Submit</button>
    </form>
    </div>
</body>
</html>