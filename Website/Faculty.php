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
function getStudents(){
	var branch=document.getElementById("b1").value;
	var semester=document.getElementById("s1").value;
	var req=new XMLHttpRequest();
	req.open("GET","http://localhost/E.R.P./FetchData/FetchStudents.php?branch="+branch+"&semester="+semester,true);
	req.send();
	req.onreadystatechange=function(){
		if(req.readyState==4 && req.status==200){
			document.getElementById("content").innerHTML=req.responseText;
		}
	};
}
function fetchData(str){
	var req=new XMLHttpRequest();
	req.open("GET","http://localhost/E.R.P./FetchData/StudentInfo.php?enrollment="+str,true);
	req.send();
	req.onreadystatechange=function(){
		if(req.readyState==4 && req.status==200){
			document.getElementById("details").innerHTML=req.responseText;
		}
	};
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
$query='select name from facultydata where id="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$array=mysqli_fetch_array($res);
echo $array['name'];
?>
</u></h2>
<a href="#addattendence" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Add Attendence</b></a><br/><br/>
<a href="#addresult" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Add Result</b></a><br/><br/>
<a href="#updatestudent" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Update Student Data</b></a><br/><br/>
<a href="#logout" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Logout</b></a><br/><br/>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="addattendence">Attendence</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Attendence</u></h2>
<form style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<input type="text" name="branch" placeholder="Branch" id="b1" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="semester" placeholder="Semester" id="s1" onkeyup="getStudents()" style="width:500px;font-size:18px" required /><br/><br/>
</form>
<form action="AddData/AddAttendence.php" method="post" style="position:relative;left:340px;width:900px;border:1px dashed" id="content"><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="addresult">Results</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Result</u></h2>
<form action="AddData/AddResult.php" method="post" style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<input type="text" name="enrollment" placeholder="Scholar No." style="width:500px;font-size:18px" required /><br/><br/>
<input type="number" name="semester" placeholder="Semester" style="width:500px;font-size:18px" required /><br/><br/>
<select name="examtype" style="width:500px;font-size:18px" required >
<option value="ut">Unit Test</option>
<option value="midsem1">Mid Semester Exam 1</option>
<option value="midsem2">Mid Semester Exam 2</option>
<option value="put">Pre University Test</option>
<option value="main">Main Exam</option>
</select><br/><br/>
<input type="text" name="per_cgpa" placeholder="Percentage / C.G.P.A." style="width:500px;font-size:18px" required /><br/><br/>
<input type="submit" value="Add Result" style="width:500px;font-size:18px"/><br/><br/><br/>
</form>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="updatestudent">Update Student Data</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Student Details</u></h2>
<form action="AddData/UpdateStudent.php" id="details" method="post" style="position:relative;left:340px;width:900px;border:1px dashed;font-size:35px;"><br/>
<input type="text" name="enrollment" placeholder="Scholar ID" style="width:500px;font-size:18px" required onchange="fetchData(this.value)" /><br/><br/>
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