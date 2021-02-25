<?php
session_start();
$enrollment=$_POST['enrollment'];
$bookid=$_POST['bookid'];
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'books');
$query='insert into book'.$enrollment.' values ('.$bookid.')';
mysqli_query($con,$query);
header('location:http://localhost/E.R.P./Librarian.php');
?>