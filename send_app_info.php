<!DOCTYPE html>
<html>
<head>
	<title>lol</title>
</head>
<body>
<?php
// se recibe la imagen
$app_name=$_POST['app_name'];
$nombre=$_FILES['imagen']['name'];
$tipo=$_FILES['imagen']['type'];
$tamaño=$_FILES['imagen']['size'];

/*destino de la imagen*/
if($tamaño<=100000)
                   {
if ($tipo=="image/png" || $tipo=="image/jpeg" || $tipo=="image/jpg" || $tipo=="image/gif")
   {


	$carpeta=$_SERVER['DOCUMENT_ROOT']. '/images/';
	move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta.$nombre);

	echo "nombre del archivo";
	echo($nombre);
	echo "<hr>";
	echo "tipo de archivo";
	echo($tipo);	
	echo "<hr>";
	echo "tamaño del archivo";
	echo($tamaño." "."KB");
	echo "<hr>";
	echo "destino del archivo";
	echo($carpeta);


  }
  else {
 echo "no se pudo subir el archivo";
  }
}
/*mostrar imagen*/


require("connect_db.php");
if ($mysqli) {
	echo "conexion exitosa";
}
else
{
echo "no se pudo conectar con la base de datos";
echo "$sql";	
}
$sql="UPDATE app_info SET conten='$nombre' WHERE id='2';";
 $resultado=mysqli_query($mysqli, $sql);

$sql2="UPDATE app_info SET conten='$app_name' WHERE id='1';";
 $resultado2=mysqli_query($mysqli, $sql2);
header("location: index.php")
 ?>

</body>
</html>
