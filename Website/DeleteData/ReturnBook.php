<?php
session_start();
$enrollment=$_POST['enrollment'];
$bookid=$_POST['bookid'];
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'books');
$query='delete from book'.$enrollment.' where bookid="'.$bookid.'"';
mysqli_query($con,$query);
header('location:http://localhost/E.R.P./Librarian.php');
?>