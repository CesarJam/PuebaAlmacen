<?php
	include("session.php");
	
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mystyle.css" /> 
<style>
body {
      background-image: url('images/Wallpaper.png');
      background-size: cover;
    }

.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

</style>
</head>
<body>

<div class="icon-bar">
  <a class="active" href="home.php"><i class="fa fa-home"></i></a> 
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<div class="icon-bar">  
  <a href="users/users.php"><i class="fa fa-user"></i> USUARIOS</a> 
  <a href="users/registration.php"><i class="fa fa-registered"></i></a>
  <a href="users/print_all.php" target="_blank"><i class="fa fa-print"></i></a>
</div>
<div class="icon-bar">
  <a href="materiales/users.php"><i class="fa fa-paperclip"></i> MATERIALES</a> 
  <a href="materiales/registration.php"><i class="fa fa-registered"></i></a>
  <a href="materiales/print_all.php" target="_blank"><i class="fa fa-print"></i></a>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<div class="container">
  



  <div class="vertical-center">
  

  </div>
</div>

</body>
</html> 