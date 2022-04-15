<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	
	<link rel="stylesheet" type="text/css" href="register.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css"> 
 </head>
</head>
<body >
     <form action="php/addreg.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php }?>


          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
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

          

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>
 
 
     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>
          <label>email</label>
          <input type="email" 
                 name="email" 
                 placeholder="example@gmai.com"><br>

     	<button type="submit">Sign Up</button>
          <a href="login.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>