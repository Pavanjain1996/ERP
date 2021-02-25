<?php
session_start();
$enrollment=$_POST['enrollment'];
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'books');
$query='create table book'.$enrollment.'(bookid int primary key)';
mysqli_query($con,$query);
mysqli_select_db($con,'result');
$query='create table result'.$enrollment.'(exam varchar(20),per_cgpa double,semester int(2))';
mysqli_query($con,$query);
mysqli_select_db($con,'attendence');
$query='create table attendence'.$enrollment.'(day date primary key,l1 char(2),l2 char(2),l3 char(2),l4 char(2),l5 char(2),l6 char(2),l7 char(2))';
mysqli_query($con,$query);
mysqli_select_db($con,'erp');
$name=$_POST['name'];
$course=$_POST['course'];
$year=$_POST['year'];
$branch=$_POST['branch'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$semester=$_POST['semester'];
$query='insert into studentdata values ("'.$enrollment.'","'.$name.'","'.$course.'",'.$year.',"'.$branch.'","'.$mobile.'","'.$email.'","'.$password.'",'.$semester.')';
mysqli_query($con,$query);
header("location:http://localhost/E.R.P./Admin.php");
?>