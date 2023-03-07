<?php
include("../config.php");
include("../session.php");

$nombreMaterial = $_POST['nombreMaterial'];
$medidaMaterial = $_POST['medidaMaterial'];
$stockMaterial = $_POST['stockMaterial'];
$stockMaterialActualizado = $_POST['stockMaterialActualizado'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO materiales(nombreMaterial, medidaMaterial, stockMaterial, stockMaterialActualizado) 
VALUES('$nombreMaterial', '$medidaMaterial', '$stockMaterial', '$stockMaterialActualizado')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Nuevo material agregado");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Material duplicado!");';
	echo 'window.location="registration.php";';
	echo '</script>';
}
?>