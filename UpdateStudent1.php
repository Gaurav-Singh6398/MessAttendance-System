<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Update_.css">
    <title>Document</title>
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
    <form class="container0" action="UpdateStudent.php" method="post">
            <div>
                <div>Username</div><br>
                <input type="text" placeholder="Enter your Username" name="rollno" id="rollno">
            </div>
            <div class="button">
                <button class="btn">Submit</button>
            </div>
        </form> 
        <form class="container0" action="UpdateStudent.php" method="post"> 
            <div>
                <div> Name</div><br>
                <input type="text" placeholder="Enter your Username" name="Name" id="Name">
            </div>
            <div class="button">
                <button class="btn">Submit</button>
            </div >
        </form>
        <form class="container0" action="UpdateStudent.php" method="post"> 
            <div>
                <div>Phone Number</div><br>
                <input type="text" placeholder="Enter your Username" name="PhoneNunber" id="PhoneNunber">
            </div>
            <div class="button">
                <button class="btn">Submit</button>
            </div>
        </form>
        <form class="container0" action="UpdateStudent.php" method="post"> 
            <div>
                <div>Email</div><br>
                <input type="text" placeholder="Enter your Username" name="Email" id="Email">
            </div>
            <div class="button">
                <button class="btn">Submit</button>
            </div>
        </form>
        <div>
</body>
</html>