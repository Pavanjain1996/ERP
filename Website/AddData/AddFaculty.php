<?php
session_start();
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'erp');
$id=$_POST['id'];
$name=$_POST['name'];
$course=$_POST['course'];
$year=$_POST['year'];
$branch=$_POST['branch'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$sub1=$_POST['subject1'];
$sub2=$_POST['subject2'];
$sub3=$_POST['subject3'];
$query='insert into facultydata values ("'.$id.'","'.$name.'","'.$course.'",'.$year.',"'.$branch.'","'.$mobile.'","'.$email.'","'.$password.'","'.$sub1.'","'.$sub2.'","'.$sub3.'")';
mysqli_query($con,$query);
header("location:http://localhost/E.R.P./Admin.php");
?>