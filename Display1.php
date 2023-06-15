<?php

$server="localhost";
$username="root";
$password="Singh@9411";

$con=mysqli_connect($server,$username,$password);
session_start();

if(!isset($_SESSION["roll_no"])){
    header('location:login.php');
}
$temp = $_SESSION["roll_no"];
if (!$con){
    echo"no";
    die("connection to this database failed due to".mysqli_connect_error());
}
$sql="select * from studentdata.student where RollNunber= $temp;";
// echo $sql;
// echo "Temp";
// die();
$sqla="select * from studentdata.student where RollNunber= $temp;";
$result=mysqli_query($con,$sql);
$resulta=mysqli_query($con,$sqla);
$count=mysqli_num_rows($result);
$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Displaytable.css">
    <title>Document</title>
</head>

<body>
    <div class="main">
    <img src="<?php echo $temp?>.png">
    <a href="logout.php">logout</a>
    <table >
    <?php 
        while ($row=mysqli_fetch_assoc($result)){
        ?>
    <TR>
    <td>RollNumber:</td>
    <td>
    <?php echo $row['RollNunber'];?>
     </td>
    </TR>
    <TR>
        <td>NAME:</td>
        
        <td> 
        <?php echo $row['Name'];?>
        
        </td>
        </TR>
        <TR>
            <td>Phone Number:</td>
            <td><?php echo $row['PhoneNumber'];?></td>
            </TR>
            <TR>
                <td>E-mail:</td>
                <td><?php echo $row['Email'];}?></td>
                </TR>
               
        
    </table>
    <div class="overbody">
    <table class="table">
    <?php 
         while($row_=mysqli_fetch_assoc($resulta)){
        ?><thead class="head">
          <tr>
                <td ></td>
                <td >Price</td>
                <td >Days</td>
                <td >Total</td>
            </tr>
         </thead>
         <tbody class="tablebody">
            <tr class="row">
                <td class="data">Breakfast</td>
                <td class="data">50</td>
                <td class="data"><?php echo $row_['Breakfast'];?></td>
                <td class="data"><?php  global $a;
                    $a=$row_['Breakfast'];
                    $a=$a*50;
                    echo $a;?>  </td>
            </tr>
            <tr class="row">
                <td class="data">Lunch</td>
                <td class="data">100</td>
                <td class="data"><?php echo $row_['Lunch'];?></td>
                <td class="data"><?php  global $b;
                    $b=$row_['Lunch'];
                    $b=$b*100;
                    echo $b;?></td>
            </tr>
            <tr class="row">
                <td class="data">Snack</td>
                <td class="data">45</td>
                <td class="data"><?php echo $row_['Snacks'];?></td>
                <td class="data"><?php  global $c;
                    $c=$row_['Snacks'];
                    $c=$c*45;
                    echo $c;?></td>
            </tr>
            <tr class="row">
                <td class="data">Dinner</td>
                <td class="data">100</td>
                <td class="data"><?php echo $row_['Dinner'];?></td>
                <td class="data"><?php  global $d;
                    $d=$row_['Dinner'];
                    $d=$d*100;
                    echo $d;}?></td>
            </tr>
            <tr class="row">
                <td class="data" colspan="3"> Grand Total</td>
                <<td class="data" ><?php global $e;
                        $e=$a+$b+$c+$d;
                        echo $e;?></td>
            </tr>
    </table>
         </div>
</body>

</html>