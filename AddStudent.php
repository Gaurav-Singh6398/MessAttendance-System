
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Addstudent_.css">
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
        <form class="formcon" action="AddStudent_.php" method="post">
            <h1>Sign Up</h1>
            <div>
                <label>Roll Number</label><br>
                <input type="text" placeholder="Enter your Username" name="rollno" id="rollno">
            </div>
            <div>
                <label>Name</label><br>
                <input type="text" placeholder="Enter your Username" name="Name" id="Name">
            </div>
            <div>
                <label>Phone Number</label><br>

                <input type="text" placeholder="Enter your Phone Number" name="Phone" id="Phone">
            </div>
            <div>
                <label>Email Id</label><br>

                <input type="email" placeholder="Enter the E-mail" id="email" name="email">
            </div>
            <div>
                <label> Password</label><br>
                <input type="password" placeholder="Enter your Password" id="password" name="password"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
            </div>
            <div>
            <div class="button">
                <button class="btn">Submit</button>
            </div>
            </div>
        </form>
    </div>
</body>
</html>
