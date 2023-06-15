<?php
session_start();  
$temp=$_SESSION["otp"];
echo $temp;
global $otp;
if(isset($_POST['Onetp'])){
   $otp=$_POST['Onetp']; 
}
echo $otp;
if($otp==$temp){
    header('location:forgot5.php');
}
?>