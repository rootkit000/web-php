<!DOCTYPE html>
<
<?php
session_start();
$id_user=$_SESSION['id'];

if (@!$_SESSION['user']) {

}else{
echo "id de usuario  :".$id_user;
}

// se recibe la imagen

$aprob=$_POST['aprob'];
$factid=$_POST['factid'];


require("connect_db.php");
if ($mysqli) {
	echo "conexion exitosa";
}
else
{
echo "no se pudo conectar con la base de datos";
echo "$sql";
}
/* subir imagen*/

$sql="UPDATE ticket SET aprobado='$aprob'  WHERE id='$factid';";
 $resultado=mysqli_query($mysqli, $sql);


if ($sql) {
	header("location: admin.php");
 }
 else
 {
 echo("a ocurrido un erro al subir la imagen al servidor.por favor intentelo de nuevo");
 }
 ?>
