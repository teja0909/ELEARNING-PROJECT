<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style type="text/css">
        body
        {

    background: #6190E8;   /*fallback for old browsers */
background: -webkit-linear-gradient(to right, #A7BFE8, #6190E8);   /*Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #A7BFE8, #6190E8);  /*W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+*/ 
}
a:link{
	color: black;
}
table {
    margin:auto;
    border:blue 1px solid;
}
.container {
    
    margin: 130px auto;
    min-height: 320px;
    width: 940px;
    overflow: auto;
    padding: 0px 10px;
}
 .left {
    float: left; 
   color:yellow;
  /* width:100px
   height:100px
}
.right {
    height: 300px; 
    float: right;
}
</style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>view</title>
        <link rel="stylesheet" href="home.css">   
</head>
<body>
    <div class="wrapper">
        
<ul class="nav-area">
<li><a href="#">Home</a></li>
<li><a href="profile.php">profile</a></li>
<li><a href="video/index.php">videos</a></li>
<li><a href="logout.php">Logout</a></li>
<li><a href="about.html">About</a></li>
<li><a href="contact.html">Contact us</a></li>
</ul>
</div>
<br>
<br>
<br>
<br>
<div class="container" style="padding-left:100px">
        
        
   
    <?php
     include 'db_conn.php';
     $sql="SELECT DISTINCT `type` FROM `file`;";
     $query=mysqli_query($conn,$sql);
     while($info=mysqli_fetch_array($query))
      {
        $a= $info['type'];
       
        
    ?>
     
      <table border="0" cellspacing="5" cellpadding="5" width="100%" >
    <thead>
        <tr>
            <th><?php echo $a;?></th>
            
        </tr>
    </thead>
    <tbody>
    <?php
        include 'db_conn.php';
        
     $sql="SELECT name FROM file WHERE type='$a' ";
     $query=mysqli_query($conn,$sql);
       while ($info=mysqli_fetch_array($query)){
    ?>
        <tr>
        
            <td>  <a href="uploads/<?php echo $info['name'];?>"><?php echo $info['name']; ?></a> </td>
            
            
        </tr>
        <?php } ?>
    </tbody>
</table>

     <?php

     }
?>


    <table border="0" cellspacing="5" cellpadding="5" width="100%" >
    <thead>
        <tr>
            <th>TEXTBOOKS</th>
            
       
    </thead>
    <tbody>
    <?php
        include 'db_conn.php';
     $sql="SELECT name FROM file WHERE type='TEXT-BOOK' ";
     $query=mysqli_query($conn,$sql);
       while ($info=mysqli_fetch_array($query)){
    ?>
       
        
            <td>  <a href="uploads/<?php echo $info['name'];?>"><?php echo $info['name']; ?></a> </td>
            
        </tr>
        <?php } ?>
    </tbody>
</table>


   
    
  
</div>
</body>
</html>