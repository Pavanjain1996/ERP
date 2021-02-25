<?php
session_start();
$enrollment=$_GET['enrollment'];
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'erp');
$query='select * from studentdata where enrollment="'.$enrollment.'"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
if($n<1)
	echo "<tr><td>No details Found</td></tr>";
else{
	$array=mysqli_fetch_array($res);
	echo "<tr>";
	echo "<td>Enrollment No.</td>";
	echo "<td>Name</td>";
	echo "<td>Course</td>";
	echo "<td>Year</td>";
	echo "<td>Branch</td>";
	echo "<td>Semester</td>";
	echo "<td>Mobile</td>";
	echo "<td>Email ID</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>".$array['enrollment']."</td>";
	echo "<td>".$array['name']."</td>";
	echo "<td>".$array['course']."</td>";
	echo "<td>".$array['year']."</td>";
	echo "<td>".$array['branch']."</td>";
	echo "<td>".$array['semester']."</td>";
	echo "<td>".$array['mobile']."</td>";
	echo "<td>".$array['email']."</td>";
	echo "</tr>";
}
?>