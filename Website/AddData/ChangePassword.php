<?php
session_start();
$password=$_POST['newpassword'];
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'erp');
$query='update studentdata set password="'.$password.'" where enrollment="'.$_SESSION['username'].'"';
mysqli_query($con,$query);
$_SESSION['password']=$password;
header("location:http://localhost/E.R.P./Student.php");
?>