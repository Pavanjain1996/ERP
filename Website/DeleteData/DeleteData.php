<?php
session_start();
$id=$_POST['id'];
$check=$id[0].$id[1].$id[2].$id[3];
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'erp');
$query='';
if($check=='0105')
	$query='delete from studentdata where enrollment="'.$id.'"';
else if($check=='IT10')
	$query='delete from facultydata where id="'.$id.'"';
else if($check=='Orie')
	$query='delete from librariandata where id="'.$id.'"';
mysqli_query($con,$query);
header('location:http://localhost/E.R.P./Admin.php');
?>