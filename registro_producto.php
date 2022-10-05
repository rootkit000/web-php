<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<?php
// se reciben las variables
$nombre_producto=$_POST['name'];
$descripcion=$_POST['description'];
$precio=$_POST['price'];




?>


</head>
<body>

</body>
</html>
<?php
session_start();
$id_user=$_SESSION['id'];

if (@!$_SESSION['user']) {
	
}else{
echo "id de usuario  :".$id_user;	
}

// se recibe la imagen

$nombre=$_FILES['imagen']['name'];
$tipo=$_FILES['imagen']['type'];
$tamaño=$_FILES['imagen']['size'];

/*destino de la imagen*/
if($tamaño<=1000000)
                   {


	$carpeta=$_SERVER['DOCUMENT_ROOT']. '/images/';
	move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta.$nombre);


  }
  else {
 echo "no se pudo subir el archivo";
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



$sql="INSERT INTO productos(producto,img,description,price,id_producto) VALUES('$nombre_producto','$nombre','$descripcion','$precio','')";
 $resultado=mysqli_query($mysqli, $sql);

if ($sql) {
	header("location: index.php");
}
 else
 {
 echo("a ocurrido un erro al subir la imagen al servidor.por favor intentelo de nuevo");	
 }



 ?>
 