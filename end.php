<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="end.css">
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
<form class="formcon2 formcon" action="end_.php" method="post">
<h1>End Attendance</h1>
        <div>
            <label>Username</label><br>
            <input type="text" placeholder="Enter your Username" name="username" id="Username">
        </div>
        <div>
            <label>Password</label><br>
            <input type="password" placeholder="Enter your Password" id="password" name="password"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
        </div>
        <div class="button">
        <button class="btn">Submit</button>
        </div>
    </form>
</div>

</body>
</html>