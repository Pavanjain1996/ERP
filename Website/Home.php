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
</head>
<body>
<div id="sidebar">
<h2 style="position:relative;left:10px">Oriental Institute of<br/>Science and Technology</h2>
<a href="#home" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Home</b></a><br/><br/>
<a href="#about" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>About</b></a><br/><br/>
<a href="#student" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Student</b></a><br/><br/>
<a href="#faculty" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Faculty</b></a><br/><br/>
<a href="#librarian" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Librarian</b></a><br/><br/>
<a href="#admin" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Admin</b></a><br/><br/>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="home">College Management System</h1>
<img src="Labels/Oriental.png" width="900px" height="550px" style="position:relative;left:340px"/>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="about">About</h1>
<div style="position:relative;left:340px;width:900px;font-size:20px">Oriental Group of Institutes was started by the founder Chairman Shri K.L. Thakral 
in the year 1995. It is a self financed premier educational group imparting qualiyty education
in the disciplines of Engineering, Pharmacy, Management and Advanced Computer Studies. The 
institutes are approved bt AICTE &amp Govt. of Madhya Pradesh and are affiliated to RGPV 
Bhopal. Oriental college of Management is affiliated to Barkatullah University Bhopal. 
At present Oriental has colleges at Bhopal, Indore, &amp Jabalpur and the group has a 
significant presence in the central region. A private university (Oriental University) is 
functioning with all its displines at Indore. Oriental Group is a self financed Organisation 
running under the Devi Shakuntala Thakral Charitable Foundation, Bhopal. The campus is located 
on a plot of land measuring 24 acres on Raisen Road, a state highway linked to BHEL township. 
Well within the Bhopal Municipal Corporation limits, it is equidistant (7 kms) from both the 
main Bhopal Railway Station and Habibganj Railway Station. Local bus transport connects the 
campus to the main city. The site is picturesque, serene, and offers clean &amp green environment.</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="student">Student</h1>
<div style="display:block;text-align:center;color:green">
<h3 style="position:relative;left:340px;width:900px">Student logins to system with valid username and password. Students can view assignments, books 
issued, Attendence, Result uploaded by faculty members.</h3>
<h2 style="position:relative;left:340px;width:900px"><u>Student Login</u></h2>
<form action="Verification/StudentVerify.php" method="post" style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<img src="Labels/Username.png" style="float:left;position:relative;left:180px;"/>
<input type="text" name="username" placeholder="Scholar Number or Scholar ID" style="width:500px;font-size:18px" required /><br/><br/>
<img src="Labels/Password.png" style="float:left;position:relative;left:180px;"/>
<input type="password" name="password" placeholder="Password" style="width:500px;font-size:18px" required /><br/><br/>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Login" style="width:500px;font-size:18px"/><br/><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="faculty">Faculty</h1>
<div style="display:block;text-align:center;color:green">
<h3 style="position:relative;left:340px;width:900px">Faculty can login with valid username
 and password to upload assignments and attendence for students. Faculty can also upload result
  of students.</h3>
<h2 style="position:relative;left:340px;width:900px"><u>Faculty Login</u></h2>
<form action="Verification/FacultyVerify.php" method="post" style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<img src="Labels/Username.png" style="float:left;position:relative;left:180px;"/>
<input type="text" name="username" placeholder="Scholar Number or Scholar ID" style="width:500px;font-size:18px" required /><br/><br/>
<img src="Labels/Password.png" style="float:left;position:relative;left:180px;"/>
<input type="password" name="password" placeholder="Password" style="width:500px;font-size:18px" required /><br/><br/>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Login" style="width:500px;font-size:18px"/><br/><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="librarian">Librarian</h1>
<div style="display:block;text-align:center;color:green">
<h3 style="position:relative;left:340px;width:900px">Librarian can login with valid username and
 password. Librarian have authority to add books, request books, issue books and return books of students.</h3>
<h2 style="position:relative;left:340px;width:900px"><u>Librarian Login</u></h2>
<form action="Verification/LibrarianVerify.php" method="post" style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<img src="Labels/Username.png" style="float:left;position:relative;left:180px;"/>
<input type="text" name="username" placeholder="Scholar Number or Scholar ID" style="width:500px;font-size:18px" required /><br/><br/>
<img src="Labels/Password.png" style="float:left;position:relative;left:180px;"/>
<input type="password" name="password" placeholder="Password" style="width:500px;font-size:18px" required /><br/><br/>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Login" style="width:500px;font-size:18px"/><br/><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="admin">Admin</h1>
<div style="display:block;text-align:center;color:green">
<h3 style="position:relative;left:340px;width:900px">Admin have authority to add student, faculty, librarian. 
Admin can also delete student, faculty and librarian.</h3>
<h2 style="position:relative;left:340px;width:900px"><u>Admin Login</u></h2>
<form action="Verification/AdminVerify.php" method="post" style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<img src="Labels/Username.png" style="float:left;position:relative;left:180px;"/>
<input type="text" name="username" placeholder="Scholar Number or Scholar ID" style="width:500px;font-size:18px" required /><br/><br/>
<img src="Labels/Password.png" style="float:left;position:relative;left:180px;"/>
<input type="password" name="password" placeholder="Password" style="width:500px;font-size:18px" required /><br/><br/>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Login" style="width:500px;font-size:18px"/><br/><br/><br/>
</form>
</div>
</body>
</html>