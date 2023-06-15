<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="attendance_.css">
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
    <form class="formcon" action='Attendance_.php' method="post">
        <div class="attendance">Attendance</div>
        <div>
        <label>Username</label><br>
            <input type="text" placeholder="Enter your username"
                name="rollno" id="rollno"><br>
        </div>
        <div>
        <label> Password</label><br>
            <input type="password" placeholder="Enter your Password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"><br>
        </div>
        <div  class="meal">
            <label>Meal</label><br>
            <div>
                <input type="radio" value="Breakfast" name="meal">Breakfast<br>
                <input type="radio" value="Lunch" name="meal">Lunch<br>    
                <input type="radio" value="Snacks" name="meal">Snacks<br>
                <input type="radio" value="Dinner" name="meal">Dinner<br>  
            </div>
        </div>
        <div class="button">
        <button class="btn">Submit</button>
        </div>
    
</form> 
<div class="button button2">
<a href="end.php"><button class="btn">End</button></a> 
</div>  
</div>
</body>
</html>