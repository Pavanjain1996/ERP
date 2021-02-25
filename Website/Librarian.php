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
<h2 style="position:relative;left:30px"><u>
<?php
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'erp');
$query='select name from librariandata where id="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$array=mysqli_fetch_array($res);
echo $array['name'];
?>
</u></h2>
<a href="#addbook" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Add Book</b></a><br/><br/>
<a href="#viewbook" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>View Book</b></a><br/><br/>
<a href="#issuebook" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Issue Book</b></a><br/><br/>
<a href="#returnbook" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Return Book</b></a><br/><br/>
<a href="#deletebook" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Delete Book</b></a><br/><br/>
<a href="#logout" style="text-decoration:none;font-size:25px;position:relative;left:30px;color:black"><b>Logout</b></a><br/><br/>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="addbook">Add Book</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Book Details</u></h2>
<form action="AddData/AddBook.php" method="post" style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<input type="number" name="bookid" placeholder="Book ID" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="name" placeholder="Book Name" style="width:500px;font-size:18px" required /><br/><br/>
<input type="text" name="author" placeholder="Author" style="width:500px;font-size:18px" required /><br/><br/>
<input type="number" name="price" placeholder="Price" style="width:500px;font-size:18px" required /><br/><br/>
<input type="submit" value="Add Book" style="width:500px;font-size:18px"/><br/><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="viewbook">View Books</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Book Details</u></h2>
<form style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<table align="center" style="border:1px solid red;align:center" cellpadding="10px">
<?php
$con=mysqli_connect('localhost','root','123456789');
mysqli_select_db($con,'erp');
$query='select * from bookdata';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
echo '<tr><td>Book ID</td><td>Name</td><td>Author</td><td>Price</td></tr>';
for($i=1;$i<=$n;$i++){
	$array=mysqli_fetch_array($res);
	echo '<tr>';
	echo '<td>'.$array['book_id'].'</td>';
	echo '<td>'.$array['name'].'</td>';
	echo '<td>'.$array['author'].'</td>';
	echo '<td>'.$array['price'].'</td>';
	echo '</tr>';
}
?>
</table><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="issuebook">Issue Book</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Book and Student Details</u></h2>
<form action="AddData/IssueBook.php" method="post" style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<input type="text" name="enrollment" placeholder="Scholor ID" style="width:500px;font-size:18px" required /><br/><br/>
<input type="number" name="bookid" placeholder="Book ID" style="width:500px;font-size:18px" required /><br/><br/>
<input type="submit" value="Issue Book" style="width:500px;font-size:18px"/><br/><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="returnbook">Return Book</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Book and Student Details</u></h2>
<form action="DeleteData/ReturnBook.php" method="post" style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<input type="text" name="enrollment" placeholder="Scholor ID" style="width:500px;font-size:18px" required /><br/><br/>
<input type="number" name="bookid" placeholder="Book ID" style="width:500px;font-size:18px" required /><br/><br/>
<input type="submit" value="Return Book" style="width:500px;font-size:18px"/><br/><br/><br/>
</form>
</div>
<h1 style="position:relative;left:340px;color:rgb(200,40,40);width:900px;border-bottom:2px solid red;padding:20px;" id="deletebook">Delete Book</h1>
<div style="display:block;text-align:center;color:green">
<h2 style="position:relative;left:340px;width:900px"><u>Book Details</u></h2>
<form action="DeleteData/DeleteBook.php" method="post" style="position:relative;left:340px;width:900px;border:1px dashed"><br/><br/>
<input type="number" name="bookid" placeholder="Book ID" style="width:500px;font-size:18px" required /><br/><br/>
<input type="submit" value="Delete Book" style="width:500px;font-size:18px"/><br/><br/><br/>
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