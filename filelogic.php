<?php
 
$sname="localhost";
$uname="root";
$password="";
$db_name="my_db";
$conn =mysqli_connect($sname,$uname,$password,$db_name);
function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}


if(isset($_POST['save']))
{
	$filename=$_FILES['filename']['name'];
	$dest='uploads/'.$filename;
	$extension=pathinfo($filename,PATHINFO_EXTENSION);
	$type=test_input($_POST['type']);
	$subject=test_input($_POST['subject']);
	$file=$_FILES['filename']['tmp_name'];
	$size=$_FILES['filename']['size'];
	if(!in_array($extension, ['pdf','docx','png']))
	{
		echo "<script>alert('YOU FILE extension MUST BE .PDF OR .PNG OR .DOCX');</script>";
		/*echo "<script>
            alert('YOU FILE extension MUST BE .PDF OR .PNG OR .DOCX');
            window.location.href='upload.php';  
</script>";*/
       /* echo "YOU FILE extension MUST BE .PDF.PNG OR .DOCX";*/
	}
	elseif ($_FILES['filename']['size']>100000000) {
		echo "<script>alert('$subject');</script>";
		//echo "file is too large";
		
	}
	else
	{
		if(move_uploaded_file($file, $dest))
		{
			$sql="INSERT INTO file (name,size,downloads,type,subject) VALUES('$filename','$size',0,'$type','$subject')";
		}
		if(mysqli_query($conn,$sql))
		{
			echo "<script>alert('file uploded sucessfully');</script>";
			//echo "file uploded sucessfully";
		}
		else
		{
		 echo "<script>alert('failed to upload file');</script>";	
          //echo "failed to upload file";
		}
	}
}
 

if(!$conn)
{
	echo "connection failed";
	exit();

}
