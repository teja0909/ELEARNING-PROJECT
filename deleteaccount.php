<?php

session_start();

include('db_conn.php');

$username=$_SESSION['username'];

$sql="DELETE FROM users WHERE Username='$username'";

$result=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Delete Account</title>
<link rel="stylesheet" type="text/css" href="profile.css"/>
<body>
	<a href="logout.php"><button class="loginbutton" type="submit">Logout</button></a>
	<div class="verification">
		<?php if($result){
			echo "<script >
alert('Your Account Deleted sucessfully');
</script>";
		}  ?>
	</div>
</body>
</head>
</html>
