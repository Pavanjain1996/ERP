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
function fetchStudentData(enrollment){
	var req=new XMLHttpRequest();
	req.open("GET","http://localhost/E.R.P./FetchData/StudentData.php?enrollment="+enrollment,true);
	req.send();
	req.onreadystatechange=function(){
		if(req.readyState==4 && req.status==200){
			document.getElementById("details").innerHTML=req.responseText;
		}
	};
}
function fetchFacultyData(id){
	var req=new XMLHttpRequest();
	req.open("GET","http://localhost/E.R.P./FetchData/FacultyData.php?id="+id,true);
	req.send();
	req.onreadystatechange=function(){
		if(req.readyState==4 && req.status==200){
			document.getElementById("details1").innerHTML=req.responseText;
		}
	};
}
function fetchLibrarianData(id){
	var req=new XMLHttpRequest();
	req.open("GET","http://localhost/E.R.P./FetchData/LibrarianData.php?id="+id,true);
	req.send();
	req.onreadystatechange=function(){
		if(req.readyState==4 && req.status==200){
			document.getElementById("details2").innerHTML=req.responseText;
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
$query='select name from credentials where user_id="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$array=mysqli_fetch_array($res);
echo $array['name'];
?>
</u></h2>
<a href="#addstudent" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Add Student</b></a><br/><br/>
<a href="#addfaculty" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Add Faculty</b></a><br/><br/>
<a href="#addlibrarian" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Add Librarian</b></a><br/><br/>
<a href="#addtimetable" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Add Timetable</b></a><br/><br/>
<a href="#viewstudent" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>View Student</b></a><br/><br/>
<a href="#viewfaculty" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>View Faculty</b></a><br/><br/>
<a href="#viewlibrarian" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>View Librarian</b></a><br/><br/>
<a href="#deletedata" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Delete Data</b></a><br/><br/>
<a href="#logout" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Logout</b></a><br/><br/>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="addstudent">Register Student</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Student Registration</u></h2>
<form action="AddData/AddStudent.php" method="post" style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<input type="text" name="enrollment" placeholder="Scholar Number or Scholar ID" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="name" placeholder="Name" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="course" placeholder="Course" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="year" placeholder="Year" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="branch" placeholder="Branch" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="semester" placeholder="Semester" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="mobile" placeholder="Mobile" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="email" placeholder="Email ID" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="password" placeholder="Password" style="width:500px;font-size:18px" required /><br/><br/>
<input type="submit" value="Register" style="width:500px;font-size:18px"/><br/><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="addfaculty">Register Faculty</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Faculty Registration</u></h2>
<form action="AddData/AddFaculty.php" method="post" style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<input type="text" name="id" placeholder="Faculty ID" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="name" placeholder="Name" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="course" placeholder="Course" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="year" placeholder="Year" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="branch" placeholder="Branch" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="mobile" placeholder="Mobile" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="email" placeholder="Email ID" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="password" placeholder="Password" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="subject1" placeholder="Subject 1" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="subject2" placeholder="Subject 2" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="subject3" placeholder="Subject 3" style="width:500px;font-size:18px" required /><br/><br/>
<input type="submit" value="Register" style="width:500px;font-size:18px"/><br/><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="addlibrarian">Register Librarian</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Librarian Registration</u></h2>
<form action="AddData/AddLibrarian.php" method="post" style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<input type="text" name="id" placeholder="Librarian ID" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="name" placeholder="Name" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="mobile" placeholder="Mobile" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="email" placeholder="Email ID" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="password" placeholder="Password" style="width:500px;font-size:18px" required /><br/><br/>
<input type="submit" value="Register" style="width:500px;font-size:18px"/><br/><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="addtimetable">Add Timetable</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Timetable</u></h2>
<form action="AddData/AddTimetable.php" method="post" style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<input type="text" name="year" placeholder="Year" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="branch" placeholder="Branch" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="semester" placeholder="Semester" style="width:500px;font-size:18px" required /><br/><br/>
<table align="center" style="border:1px solid red;align:center" cellpadding="3px">
<tr>
<th></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
<th>V</th>
<th>VI</th>
<th>VII</th>
</tr>
<tr>
<th>Monday</th>
<td><input type="text" name="M1" style="width:100px" required /></td>
<td><input type="text" name="M2" style="width:100px" required /></td>
<td><input type="text" name="M3" style="width:100px" required /></td>
<td><input type="text" name="M4" style="width:100px" required /></td>
<td><input type="text" name="M5" style="width:100px" required /></td>
<td><input type="text" name="M6" style="width:100px" required /></td>
<td><input type="text" name="M7" style="width:100px" required /></td>
</tr>
<tr>
<th>Tuesday</th>
<td><input type="text" name="T1" style="width:100px" required /></td>
<td><input type="text" name="T2" style="width:100px" required /></td>
<td><input type="text" name="T3" style="width:100px" required /></td>
<td><input type="text" name="T4" style="width:100px" required /></td>
<td><input type="text" name="T5" style="width:100px" required /></td>
<td><input type="text" name="T6" style="width:100px" required /></td>
<td><input type="text" name="T7" style="width:100px" required /></td>
</tr>
<tr>
<th>Wednesday</th>
<td><input type="text" name="W1" style="width:100px" required /></td>
<td><input type="text" name="W2" style="width:100px" required /></td>
<td><input type="text" name="W3" style="width:100px" required /></td>
<td><input type="text" name="W4" style="width:100px" required /></td>
<td><input type="text" name="W5" style="width:100px" required /></td>
<td><input type="text" name="W6" style="width:100px" required /></td>
<td><input type="text" name="W7" style="width:100px" required /></td>
</tr>
<tr>
<th>Thursday</th>
<td><input type="text" name="Th1" style="width:100px" required /></td>
<td><input type="text" name="Th2" style="width:100px" required /></td>
<td><input type="text" name="Th3" style="width:100px" required /></td>
<td><input type="text" name="Th4" style="width:100px" required /></td>
<td><input type="text" name="Th5" style="width:100px" required /></td>
<td><input type="text" name="Th6" style="width:100px" required /></td>
<td><input type="text" name="Th7" style="width:100px" required /></td>
</tr>
<tr>
<th>Friday</th>
<td><input type="text" name="F1" style="width:100px" required /></td>
<td><input type="text" name="F2" style="width:100px" required /></td>
<td><input type="text" name="F3" style="width:100px" required /></td>
<td><input type="text" name="F4" style="width:100px" required /></td>
<td><input type="text" name="F5" style="width:100px" required /></td>
<td><input type="text" name="F6" style="width:100px" required /></td>
<td><input type="text" name="F7" style="width:100px" required /></td>
</tr>
<tr>
<th>Saturday</th>
<td><input type="text" name="S1" style="width:100px" required /></td>
<td><input type="text" name="S2" style="width:100px" required /></td>
<td><input type="text" name="S3" style="width:100px" required /></td>
<td><input type="text" name="S4" style="width:100px" required /></td>
<td><input type="text" name="S5" style="width:100px" required /></td>
<td><input type="text" name="S6" style="width:100px" required /></td>
<td><input type="text" name="S7" style="width:100px" required /></td>
</tr>
</table>
<br/>
<input type="submit" value="ADD" style="width:200px;font-size:18px"/><br/><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="viewstudent">Student Details</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Student Details</u></h2>
<form style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<input type="text" placeholder="Scholar ID" style="width:500px;font-size:18px" required onkeyup="fetchStudentData(this.value)" /><br/><br/>
<table id="details" align="center" style="border:2px solid red;align:center" cellpadding="5px">
</table><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="viewfaculty">Faculty Details</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Faculty Details</u></h2>
<form style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<input type="text" placeholder="Faculty ID" style="width:500px;font-size:18px" required onkeyup="fetchFacultyData(this.value)" /><br/><br/>
<table id="details1" align="center" style="border:2px solid red;align:center" cellpadding="5px">
</table><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="viewlibrarian">Librarian Details</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Librarian Details</u></h2>
<form style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<input type="text" placeholder="Librarian ID" style="width:500px;font-size:18px" required onkeyup="fetchLibrarianData(this.value)" /><br/><br/>
<table id="details2" align="center" style="border:2px solid red;align:center" cellpadding="5px">
</table><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="deletedata">Delete Data</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Student/Faculty/Librarian</u></h2>
<form action="DeleteData/DeleteData.php" method="post" style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<input type="text" name="id" placeholder="Scholar ID / Faculty ID / Librarian ID" style="width:500px;font-size:18px" required /><br/><br/>
<input type="submit" value="Delete" style="width:500px;font-size:18px"/><br/><br/><br/>
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