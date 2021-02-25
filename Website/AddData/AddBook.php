<?php
session_start();
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'erp');
$bookid=$_POST['bookid'];
$name=$_POST['name'];
$author=$_POST['author'];
$price=$_POST['price'];
$query='insert into bookdata values ('.$bookid.',"'.$name.'","'.$author.'",'.$price.')';
mysqli_query($con,$query);
header('location:http://localhost/E.R.P./Librarian.php');
?>