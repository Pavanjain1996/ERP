<?php
session_start();
$_SESSION['username']='';
$_SESSION['password']='';
$username=$_POST['username'];
$password=$_POST['password'];
$flag=0;
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'erp');
$query='select id,password from facultydata where id="'.$username.'"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
for($i=1;$i<=$n;$i++){
	$array=mysqli_fetch_array($res);
	if($array['id']==$username && $array['password']==$password){
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$flag=1;
		header("location:http://localhost/E.R.P./Faculty.php");
	}
}
if($flag==0){
	header("location:http://localhost/E.R.P./Home.php");
}
?>