<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
    body{
       background-image:url('login.jpg');
       background-position:center;
       background-size:cover;
       font-family:sans-serif;
       color:white;
       margin-top:40px;
       }</style>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 </head>
 <link rel="stylesheet" href="home.css">  

<body >
    <div class="wrapper" >
       
<ul class="nav-area" style="background-color: greenyellow;">
<li><a href="index.html">Home</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact us</a></li>
</ul>
</div>
<div class="container d-flex justify-content-center align-items-center "
style="min-height:90vh;">
<form class="border shadow p-3 roounded"
   action="php/checklog.php" 
   method="post" 
style="width:500px;background-color:yellowgreen;">
<h1 class="text-center p-3">LOGIN</h1>
<?php if (isset($_GET['error'])) { ?>
   <div class="alert alert-danger" role="alert">
         <?=$_GET['error']?>
        </div>
        <?php } ?>
        
 <div class="mb-1">
    <label for="Selectlabel class="form-label">select user type</label>
 </div>
 <select class="form-select" 
 name="role" 
 aria-label="Default select example">
  <!--<option selected>Open this select menu</option>-->
  <option value="student">student</option>
  <option value="Teacher">Teacher</option>
</select>
  <div class="mb-3">
    <label for="username" class="form-label">username</label>
    <input type="text" name="username" class="form-control" id="username">
   
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">password</label>
    <input type="Password" name="password" class="form-control" id="password">
   
  </div>
 
  <button type="submit" class="btn btn-primary" style="margin-left: 150px;width: 150px;">LOGIN</button>
</form>
     </div> 
</body>
</html>
<?php }else{
  header("Location: index.html");
} ?>