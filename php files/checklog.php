<?php  
session_start();
include "../db_conn.php";
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
  
	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);

	if (empty($username)) {
		header("Location: ../login.php?error=User Name is Required");
	}else if (empty($password)) {
		header("Location: ../login.php?error=Password is Required");
	}else {
		// Hashing the password
		$password = md5($password);
       $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if($role === 'Teacher' && $role === $row['role'])
{
        	$_SESSION['email'] = $row['email'];
        		$_SESSION['username'] = $row['username'];
        		$_SESSION['role'] = $row['role'];
        		header("Location: ../upload.php");
        	
 }

            elseif($role === 'student' && $role === $row['role'])
{
        	$_SESSION['email'] = $row['email'];
        		$_SESSION['username'] = $row['username'];
        		$_SESSION['role'] = $row['role'];
        		header("Location: ../view.php");
        	
 }
 else
 {
 	header("Location: ../login.php?error=Incorect User name or password");
 }       			
        		
        
        }else {
        	header("Location: ../login.php?error=Incorect User name or password");
}
}
}else
{
	header("Location:logout.php");
}