<?php
session_start();
$enrollment=$_POST['enrollment'];
$name=$_POST['name'];
$course=$_POST['course'];
$year=$_POST['year'];
$branch=$_POST['branch'];
$semester=$_POST['semester'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'erp');
$query='update studentdata set name="'.$name.'" , course="'.$course.'" , year='.$year.' , branch="'.$branch.'" , semester='.$semester.' , mobile="'.$mobile.'" , email="'.$email.'" where enrollment="'.$enrollment.'"';
mysqli_query($con,$query);
header("location:http://localhost/E.R.P./Faculty.php");
?>