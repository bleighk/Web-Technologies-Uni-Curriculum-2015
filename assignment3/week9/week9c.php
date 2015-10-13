<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 3 | Week 9c</title>
</head>
<body>

<table border="1">
<tr>
	<th>ID</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Phone Number</th>
	<th>Meal Type</th>
</tr>
<?php
	require 'dblink.php';

	$var_fName=mysqli_real_escape_string($con, $_REQUEST['fName']);
	$var_lName=mysqli_real_escape_string($con, $_REQUEST['lName']);
	$var_guest_phone=mysqli_real_escape_string($con, $_REQUEST['guest_phone']);
	$var_guest_meal=mysqli_real_escape_string($con, $_REQUEST['guest_meal']);

	$sql1="SELECT * FROM tblguests;";

	$result=mysqli_query($con,$sql1);

	while ($row = mysqli_fetch_array($result)) 
	{
		echo "<tr>";
		echo "<td>".$row['guest_id']."</td>";
		echo "<td>".$row['guest_fName']."</td>";
		echo "<td>".$row['guest_lName']."</td>";
		echo "<td>".$row['guest_phone']."</td>";
		echo "<td>".$row['guest_meal']."</td>";
		echo "</tr>";
	}

	mysqli_close($con);
?>
</table>

<p><a href="week9a.html">Back</a</p>
<p><a href="/assignment3/index.html">Assignment 3 Home</a></p>

</body>
</html>