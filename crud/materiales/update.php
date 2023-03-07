<?php
include("../config.php");
include("../session.php");

$idMaterial = $_POST['idMaterial'];
$nombreMaterial = $_POST['nombreMaterial'];
$medidaMaterial = $_POST['medidaMaterial'];
$stockMaterial = $_POST['stockMaterial'];
$stockMaterialActualizado = $_POST['stockMaterialActualizado'];


$sql = "UPDATE materiales SET nombreMaterial='$nombreMaterial', medidaMaterial='$medidaMaterial', stockMaterial='$stockMaterial', stockMaterialActualizado='$stockMaterialActualizado' 
WHERE idMaterial='$idMaterial'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="users.php";';
	echo '</script>';
}
?>