<?php 

$conexion=mysqli_connect('localhost','root','','cies');

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$year=$_POST['year'];
$mencion=$_POST['mencion'];
$seccion=$_POST['seccion'];
$cedula=$_POST['cedula'];



$sql="INSERT INTO alumnos (nombres,apellidos,year,mencion,seccion,cedula) VALUES ('$nombres','$apellidos','$year','$mencion','$seccion','$cedula')";
if ($sql) {echo "conexion exitosa";
}elseif($sql){echo "no se pudo conectar";}
echo mysqli_query($conexion,$sql);


?>
