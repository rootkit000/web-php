<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<?php
// se reciben las variables
$header=$_POST['header'];
$content=$_POST['content'];
$color=$_POST['color'];
$coin=$_POST['coin'];
$color_gradient=$_POST['color_gradient'];
$color_gradient2=$_POST['color_gradient2'];
$color_gradient3=$_POST['color_gradient3'];

if(@!$_POST['active'])
{
$active="off";    
}
else{
$active=$_POST['active'];
}

if(@!$_POST['active_slider'])
{
$active_slider="off";    
}
else{
$active_slider=$_POST['active_slider'];
}

?>
<?php

require("connect_db.php");
if ($mysqli) {
	echo "conexion exitosa";
}
else
{
echo "no se pudo conectar con la base de datos";
echo "$sql";	
}

$sql="UPDATE config SET header='$header',content='$content',active='$active',active_slider='$active_slider',color='$color',coin='$coin',color_gradient='$color_gradient',color_gradient2='$color_gradient2',color_gradient3='$color_gradient3' WHERE id='1'";
 $resultado=mysqli_query($mysqli, $sql);

if ($sql) {
	header("location: index.php");
}
 else
 {
 echo("a ocurrido un erro al subir la imagen al servidor.por favor intentelo de nuevo");	
 }



 ?>
 