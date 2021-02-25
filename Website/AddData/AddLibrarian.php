<?php
session_start();
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'erp');
$id=$_POST['id'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$query='insert into librariandata values ("'.$id.'","'.$name.'","'.$mobile.'","'.$email.'","'.$password.'")';
mysqli_query($con,$query);
header("location:http://localhost/E.R.P./Admin.php");
?>