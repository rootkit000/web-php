<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
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
if($tamaño<=1000000	)
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

echo $id_user;

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
/*       ------saber el nombre de usuario que actualizo-----             */
$rest="SELECT user FROM login WHERE id='$id_user';";

$resultado2=mysqli_query($mysqli,$rest);

if($fila=mysqli_fetch_row($resultado2))
{
$user_name=$fila['0'];
}
$nombre_user=$user_name;

/* subir imagen*/

$sql="UPDATE login SET img='$nombre'  WHERE id='$id_user';";
 $resultado=mysqli_query($mysqli, $sql);

/*actulizar la img en los comentarios*/

$sql2="UPDATE post SET img='$nombre'  WHERE name='$nombre_user';";
 $resultado2=mysqli_query($mysqli, $sql2);

if ($sql) {
	header("location: index.php");
 }
 else
 {
 echo("a ocurrido un erro al subir la imagen al servidor.por favor intentelo de nuevo");	
 }
 ?>