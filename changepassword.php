<?php
session_start();
$error="";
if(isset($_POST['submit']))
{
include('db_conn.php');

if($_POST['newpassword']==$_POST['confirmpassword'])
{

$username=$_SESSION['username'];

$confirmpassword=mysqli_escape_string($conn,filter_var(strip_tags($_POST['confirmpassword']),FILTER_SANITIZE_STRIPPED));


$hash_password = md5($confirmpassword);

$sql="UPDATE users SET Password='$hash_password' WHERE username='$username'";

$result=mysqli_query($conn,$sql);


}
else{
	$error = "The Passwords doesn't match each other";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="profile.css"/>
<title>Login System in Php and Mysql</title>
</head>
<body>
	<?php if(isset($result))
	{
		echo '<div class="verification">Your Password has been changed successfully</div>';
		die();
	}
	?>
	<a href="logout.php"><button class="loginbutton" type="submit">Logout</button></a>
	<div id="section">
		<form method="post" action="">
		<h1>Edit Password</h1>
		<input type="password" name="newpassword" placeholder="newpassword"/>
		<input type="password" name="confirmpassword" placeholder="confirmpassword"/>
		<a href="changepassword.php"><button type="submit" name="submit">Change Password</button></a><br><br><br><br>
		<span style="color:white;"><?php if(isset($error)){echo $error;}?></span>
		</form>
	</div>
</body>
</html>