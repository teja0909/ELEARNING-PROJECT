<?php 
echo "<script >
alert('Logout sucessfully');
window.location.href='index.html';  
</script>";
session_start();
session_unset();
session_destroy();
//header("Location: home.html");