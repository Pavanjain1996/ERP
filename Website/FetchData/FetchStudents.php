<?php
session_start();
$branch=$_GET['branch'];
$semester=$_GET['semester'];
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'erp');
$query='select enrollment from studentdata where branch="'.$branch.'" and semester='.$semester.' order by enrollment';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
echo '<br/><br/>';
echo '<input type="number" name="lecture" placeholder="Lecture No." style="width:500px;font-size:18px" required />';
echo '<br/><br/>';
echo '<input type="date" name="date" style="width:500px;font-size:18px" required />';
echo '<table align="center" style="border:1px solid red;align:center" cellpadding="10px">';
echo '<br/><br/>';
for($i=1;$i<=$n;$i++){
	$array=mysqli_fetch_array($res);
	echo '<tr>';
	echo '<td>'.$array['enrollment'].'</td>';
	echo '<td><input type="radio" name="a'.$i.'" value="P">Present</input></td>';
	echo '<td><input type="radio" name="a'.$i.'" value="A">Absent</input></td>';
	echo '</tr>';
}
echo '</table>';
echo '<br/><br/>';
echo '<input type="submit" value="Update" style="width:500px;font-size:18px"/>';
echo '<br/><br/>';
?>