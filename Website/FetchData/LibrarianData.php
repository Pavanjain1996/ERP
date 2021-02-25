<?php
session_start();
$id=$_GET['id'];
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'erp');
$query='select * from librariandata where id="'.$id.'"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
if($n<1)
	echo "<tr><td>No details Found</td></tr>";
else{
	$array=mysqli_fetch_array($res);
	echo "<tr>";
	echo "<td>Librarian ID</td>";
	echo "<td>Name</td>";
	echo "<td>Mobile</td>";
	echo "<td>Email ID</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>".$array['id']."</td>";
	echo "<td>".$array['name']."</td>";
	echo "<td>".$array['mobile']."</td>";
	echo "<td>".$array['email']."</td>";
	echo "</tr>";
}
?>