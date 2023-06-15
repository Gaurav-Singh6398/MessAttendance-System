<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Delete1.css">
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
    <div class="container">
    <form class="container0" action="Delete_.php" method="post">
            <div>
                <div>BY Username</div><br>
                <input type="text" placeholder="Enter your Username" name="rollno" id="rollno">
            </div>
            <div class="button">
                <button class="btn">Submit</button>
            </div>
        </form >
        <form class="container0" action="Delete_.php" method="post"> 
            <div>
                <div> Name</div><br>
                <input type="text" placeholder="Enter your Username" name="Name" id="rollno">
            </div>
            <div class="button">
                <button class="btn">Submit</button>
            </div>
        </form >
        <form class="container0" action="Delete_.php" method="post"> 
            <div>
                <div>Phone Number</div><br>
                <input type="text" placeholder="Enter your PhoneNumer" name="PhoneNunber" id="rollno">
            </div>
            <div class="button">
                <button class="btn">Submit</button>
            </div>
        </form >
        <form class="container0" action="Delete_.php" method="post"> 
            <div>
                <div>E-mail</div><br>
                <input type="text" placeholder="Enter your E-mail" name="Email" id="rollno">
            </div>
            <div class="button">
                <button class="btn">Submit</button>
            </div>
        </form>
        </div>
</body>
</html>