<?php
	include("../session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/mystyle1.css" /> 
</head>
<body>
<div class="icon-bar">
  <a href="../home.php"><i class="fa fa-home"></i></a> 
  <a href="users.php"><i class="fa fa-paperclip"></i></a> 
  <a class="active" href="registration.php"><i class="fa fa-registered"></i></a>
  <a href="print_all.php" target="_blank"><i class="fa fa-print"></i></a>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Registrarse</h2>
<hr/>
<form action="register.php" method="POST">
  <div class="container">
	<input type="text" placeholder="nombreMaterial" name="nombreMaterial" required>
  <input type="text" placeholder="medidaMaterial" name="medidaMaterial" required>
  <input type="text" placeholder="stockMaterial" name="stockMaterial" required>
  <input type="text" placeholder="stockMaterialActualizado" name="stockMaterialActualizado" required>
  
  <div class="clearfix">
      <button type="submit" class="signupbtn">Registrarse</button>
	  <button type="reset" class="cancelbtn">Cancelar</button>
    </div>
  </div>
</form>