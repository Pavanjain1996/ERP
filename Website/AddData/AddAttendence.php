<?php
session_start();
$date=$_POST['date'];
$lecture=$_POST['lecture'];
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'erp');
$query='select enrollment from studentdata order by enrollment';
$res=mysqli_query($con,$query);
mysqli_select_db($con,'attendence');
$n=mysqli_num_rows($res);
for($i=1;$i<=$n;$i++){
	$array=mysqli_fetch_array($res);
	$query='insert into attendence'.$array['enrollment'].' (day) values ("'.$date.'")';
	mysqli_query($con,$query);
}
mysqli_select_db($con,'erp');
$query='select enrollment from studentdata order by enrollment';
$res=mysqli_query($con,$query);
mysqli_select_db($con,'attendence');
for($i=1;$i<=$n;$i++){
	$array=mysqli_fetch_array($res);
	$query='update attendence'.$array['enrollment'].' set l'.$lecture.'="'.$_POST["a$i"].'" where day="'.$date.'"';
	mysqli_query($con,$query);
}
header("location:http://localhost/E.R.P./Faculty.php");
?>