<?php 
session_start(); 
include "../db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
&& isset($_POST['email']) )
 {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
    $email = validate($_POST['email']);
    $role = validate($_POST['role']);
    $user_data = 'uname='. $uname. '&email='. $email.'&role='.$role;
  	if (empty($uname)) {
		header("Location: ../register.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: ../register.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($email)){
        header("Location: ../register.php?error=email is required&$user_data");
        exit();
    }
	else{
		// hashing the password
       $pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE username='$uname'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) >0 ) {
			header("Location:../register.php?error= The Username is taken try another&$user_data");
			exit();
		}
		else
		{
			$sql2="INSERT INTO users(email,role,username,password) VALUES ('$email','$role','$uname','$pass')";
			$result2=mysqli_query($conn,$sql2);
			if($result2)
			{
				header("Location:../register.php?success=Your account has been created successfully");
				exit();
			}else
			{
               header("Location:../register.php?error= unkown error occurred $user_data");
			exit();
			}
		}
			
	}
	
}else{
	header("Location: ../register.php");
	exit();
}
