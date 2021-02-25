<?php
session_start();
?>
<html>
<head>
<title>E.R.P.</title>
<style>
#sidebar
{
	background-color:rgb(200,40,40);
	width:300px;
	height:680px;
	position:fixed;
	top:0px;
	left:0px;
}
</style>
<script>
function Validation(){
	var result=true;
	password1=document.getElementById("p1").value;
	password2=document.getElementById("p2").value;
	if(password1!=password2){
		result=false;
		alert("Old Passwords do not match");
	}
	return result;
}
</script>
</head>
<body>
<div id="sidebar">
<h2 style="position:relative;left:10px">Oriental Institute of<br/>Science and Technology</h2>
<h2 style="position:relative;left:30px"><u>
<?php
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'erp');
$query='select * from studentdata where enrollment="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$array=mysqli_fetch_array($res);
echo $array['name'];
?>
</u></h2>
<a href="#myprofile" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>My Profile</b></a><br/><br/>
<a href="#viewbook" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>View Books</b></a><br/><br/>
<a href="#viewattendence" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>View Attendence</b></a><br/><br/>
<a href="#viewresult" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>View Result</b></a><br/><br/>
<a href="#changepassword" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Change Password</b></a><br/><br/>
<a href="#logout" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Logout</b></a><br/><br/>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="myprofile">Profile</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Student Details</u></h2>
<form style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<label>Enrollment No.</label><br/>
<input type="text" style="width:500px;font-size:18px" value="<?php echo $array['enrollment']; ?>" readonly /><br/><br/>
<label>Name</label><br/>
<input type="text" style="width:500px;font-size:18px" value="<?php echo $array['name']; ?>" readonly /><br/><br/>
<label>Course</label><br/>
<input type="text" style="width:500px;font-size:18px" value="<?php echo $array['course']; ?>" readonly /><br/><br/>
<label>Year</label><br/>
<input type="text" style="width:500px;font-size:18px" value="<?php echo $array['year']; ?>" readonly /><br/><br/>
<label>Branch</label><br/>
<input type="text" style="width:500px;font-size:18px" value="<?php echo $array['branch']; ?>" readonly /><br/><br/>
<label>Semester</label><br/>
<input type="text" style="width:500px;font-size:18px" value="<?php echo $array['semester']; ?>" readonly /><br/><br/>
<label>Mobile No.</label><br/>
<input type="text" style="width:500px;font-size:18px" value="<?php echo $array['mobile']; ?>" readonly /><br/><br/>
<label>Email ID</label><br/>
<input type="text" style="width:500px;font-size:18px" value="<?php echo $array['email']; ?>" readonly /><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="viewbook">Books</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Book Details</u></h2>
<form style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<table align="center" style="border:1px solid red;align:center" cellpadding="10px">
<tr>
<td>Book ID</td>
<td>Name</td>
<td>Author</td>
<td>Price</td>
</tr>
<?php
mysqli_select_db($con,'books');
$table='book'.$array['enrollment'];
$query='select * from '.$table;
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
for($i=1;$i<=$n;$i++){
	$array=mysqli_fetch_array($res);
	echo '<tr>';
	echo '<td>'.$array['bookid'].'</td>';
	mysqli_select_db($con,'erp');
	$query='select * from bookdata where book_id='.$array['bookid'];
	$res1=mysqli_query($con,$query);
	$array1=mysqli_fetch_array($res1);
	echo '<td>'.$array1['name'].'</td>';
	echo '<td>'.$array1['author'].'</td>';
	echo '<td>'.$array1['price'].'</td>';
	echo '</tr>';
}
?>
</table>
<br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="viewattendence">Attendence</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Percentage Attendence</u></h2>
<form style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<?php
$total=0;
$present=0;
mysqli_select_db($con,'attendence');
$query='select * from attendence'.$_SESSION['username'];
$res2=mysqli_query($con,$query);
$n1=mysqli_num_rows($res2);
for($i=1;$i<=$n1;$i++){
	$array2=mysqli_fetch_array($res2);
	if($array2['l1']=='P'){
		$total=$total+1;
		$present=$present+1;
	}
	else if($array2['l1']=='A'){
		$total=$total+1;
	}
	if($array2['l2']=='P'){
		$total=$total+1;
		$present=$present+1;
	}
	else if($array2['l2']=='A'){
		$total=$total+1;
	}
	if($array2['l3']=='P'){
		$total=$total+1;
		$present=$present+1;
	}
	else if($array2['l3']=='A'){
		$total=$total+1;
	}
	if($array2['l4']=='P'){
		$total=$total+1;
		$present=$present+1;
	}
	else if($array2['l4']=='A'){
		$total=$total+1;
	}
	if($array2['l5']=='P'){
		$total=$total+1;
		$present=$present+1;
	}
	else if($array2['l5']=='A'){
		$total=$total+1;
	}
	if($array2['l6']=='P'){
		$total=$total+1;
		$present=$present+1;
	}
	else if($array2['l6']=='A'){
		$total=$total+1;
	}
	if($array2['l7']=='P'){
		$total=$total+1;
		$present=$present+1;
	}
	else if($array2['l7']=='A'){
		$total=$total+1;
	}
}
$percentage=0;
if($total>0){
	$percent=($present/$total)*100;
	$percentage=number_format((float)$percent,2,'.','');
}
?>
<input type="text" style="width:500px;font-size:18px" value="<?php echo $percentage; ?> %" readonly /><br/><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="viewresult">Results</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Result</u></h2>
<form action="AddData/ChangePassword.php" method="post" style="position:relative;left:340px;width:900px;border:1px dashed" onsubmit="return Validation()" ><br/><br/>
<table align="center" style="border:1px solid red;align:center" cellpadding="10px">
<tr>
<td>Exam</td>
<td>Semester</td>
<td>Percentage / C.G.P.A.</td>
</tr>
<?php
mysqli_select_db($con,'result');
$query='select * from result'.$_SESSION['username'];
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
for($i=1;$i<=$n;$i++){
	$array2=mysqli_fetch_array($res);
	echo '<tr>';
	echo '<td>'.$array2['exam'].'</td>';
	echo '<td>'.$array2['semester'].'</td>';
	echo '<td>'.$array2['per_cgpa'].'</td>';
	echo '</tr>';
}
?>
</table><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="changepassword">Change Password</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Modify Password</u></h2>
<form action="AddData/ChangePassword.php" method="post" style="position:relative;left:340px;width:900px;border:1px dashed" onsubmit="return Validation()" ><br/><br/>
<input type="password" name="oldpassword" id="p1" placeholder="Old Password" style="width:500px;font-size:18px" required /><br/><br/>
<input type="password" name="confirmpassword" id="p2" placeholder="Confirm Old Password" style="width:500px;font-size:18px" required /><br/><br/>
<input type="password" name="newpassword" id="p3" placeholder="New Password" style="width:500px;font-size:18px" required /><br/><br/>
<input type="submit" value="Change Password" style="width:500px;font-size:18px"/><br/><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="logout">Logout</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Confirm Logout</u></h2>
<form action="Logout/Logout.php" style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<input type="submit" value="Logout" style="width:500px;font-size:18px"/><br/><br/><br/>
</form>
</div>
</body>
</html>