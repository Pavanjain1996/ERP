<?php
session_start();
$bookid=$_POST['bookid'];
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'erp');
$query='delete from bookdata where book_id='.$bookid;
mysqli_query($con,$query);
header('location:http://localhost/E.R.P./Librarian.php');
?>