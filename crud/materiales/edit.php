<?php
	include("../session.php");
	include("../config.php");
	$id = $_GET['id'];
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
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Actualizar</h2>
<hr/>

<form action="update.php" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM materiales WHERE idMaterial ='$id'");
	while($row = mysqli_fetch_array($result))
	{
	  echo"<input type='hidden' name='idMaterial' value='{$row['idMaterial']}' required>";
    echo"<input type='text' placeholder='nombreMaterial' name='nombreMaterial' value='{$row['nombreMaterial']}' required>";
    echo"<input type='text' placeholder='medidaMaterial' name='medidaMaterial' value='{$row['medidaMaterial']}' required>";
    echo"<label><b>STOCK</b>";
    echo"<input type='text' placeholder='stockMaterial' name='stockMaterial' value='{$row['stockMaterial']}' required>";
    echo"<label><b>STOCK ACTUALIZADO</b>";
    echo"<input type='text' placeholder='stockMaterialActualizado' name='stockMaterialActualizado' value='{$row['stockMaterialActualizado']}' required>";
  	
   
    echo"<div class='clearfix'>";
    echo"<button type='submit' class='signupbtn'>Actualizar</button>";
	echo"</div>";
	}?>
  </div>
</form>