<?php
session_start();
$enrollment=$_POST['enrollment'];
$semester=$_POST['semester'];
$examtype=$_POST['examtype'];
$cgpa=$_POST['per_cgpa'];
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'result');
$query='insert into result'.$enrollment.' values ("'.$examtype.'",'.$cgpa.','.$semester.')';
mysqli_query($con,$query);
header("location:http://localhost/E.R.P./Faculty.php");
?>