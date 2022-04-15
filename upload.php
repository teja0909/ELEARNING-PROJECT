<?php include 'filelogic.php';  ?>
<!DOCTYPE html>
<html>
<head>
  <title>upload file</title>
  <link rel="stylesheet" href="uploadstyle.css">
  <link rel="stylesheet" href="home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style media="screen" >
 /* label{
  font-size: 20px;
  margin-top:50px;
  font-weight: bold;
  
}
*/body
{
   background-image: url('upload.png');
   background-position:center;
       background-size:cover;
       font-family:sans-serif;
       color:white;
       margin-top:40px;
}
#box
{
  border: 0.5px solid black;
     width: 600px; 
     margin-left: 370px;
     margin-top: 40px;
}
#save
{
  font-size: 25px;
  font-weight: bolder;
  margin-left: 25px;
  margin-top: 10px;
  width: 200px;
  background-color: #76fafa;
}
#myFile
{
   font-size: 17px;
   font-weight: bold;
   margin-top:10px ;
   width: 250px;
}
</style>
</head>
<body >
 <div class="wrapper" style="padding-top: -50px;">
       
<ul class="nav-area">
<li><a href="index.html">Home</a></li>
<li><a href="video/upload.php">upload a video</a></li>
<li><a href="logout.php">Logout</a></li>
<li><a href="profile.php">profile</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact us</a></li>
</ul>
</div>
<br>
<br>
  <div class="container d-flex justify-content align-items-center"  style="min-height:90vh;" >
    
       <form action="upload.php" method="post" enctype="multipart/form-data" style="padding-left: 150px;">
        <div class="mb-3" style="width:200px">
    <label for="title" class="form-label">subject</label>
    <input type="text" name="subject" class="form-control" id="subject">
   
  </div>
        <label>select type</label>
               <select class="form-select" 
 name="type" 
 aria-label="Default select example"
 style="width:200px">
  <!--<option selected>Open this select menu</option>-->
  <option value="TEXT-BOOK">TEXT-BOOK</option>
  <option value="MATERIAL">MATERIAL</option>
  </select>
      <label for="">Upload file </label> 
      <div class="mb-3">
    <input type="file" id="myFile" name="filename" value="" required><br><br>
   
  </div>
 <br><br>
  
      <button id="save" type="submit" name="save">Upload</button> 
      </form>
     

</div>
</body>
</html>