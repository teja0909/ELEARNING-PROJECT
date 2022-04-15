<?php
session_start();
include('db_conn.php');

$username=$_SESSION['username'];

$sql="SELECT * FROM users WHERE username='$username'";

$result=mysqli_query($conn,$sql) or die("Your query is not correct");

$row=mysqli_fetch_array($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="profile.css"/>
<title>Login System in Php and Mysql</title>
</head>
<body>
	<a href="logout.php"><button class="loginbutton" type="submit">Logout</button></a>
	<div id="section">
		<h1>Profile Details</h1>
		<input type="text" readonly name="username" value="<?php echo $row['username'];?>"/>
		<input type="email" readonly name="email" value="<?php echo $row['email'];?>"/>
		<input type="text" readonly name="role" value="<?php echo $row['role'];?>"/>
		<a href="changepassword.php"><button type="submit">Change Password</button></a>
		<!-- <a href="deleteaccount.php"><button type="submit">Delete Account</button></a> -->
	</div>
</body>
</html>