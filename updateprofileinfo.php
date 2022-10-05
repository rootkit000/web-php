<?php
session_start();
/*sesiones*/
   if (@!$_SESSION['user'])
   {
echo "no has iniciado sesion";
   }
  $id_user=$_SESSION['id'];

echo $id_user;

/*conectar con la base de datos*/
require("connect_db.php");
/*procesar los valores recibidos*/

$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
/**realizar la consulta para actualizar**/



$sql="UPDATE login SET  user='$name'  WHERE id='$id_user';";
 $resultado=mysqli_query($mysqli, $sql);

$sql2="UPDATE login SET  lastname='$lastname'  WHERE id='$id_user';";
 $resultado2=mysqli_query($mysqli, $sql2);



if ($sql&$sql2) {
	
$sql3="UPDATE login SET emailS='$email'  WHERE id='$id_user';";
 $resultado3=mysqli_query($mysqli, $sql3);
if($resultado3)
    {
header("location: profile.php");

    }
 
 else
 {
 echo"<script type='text/javascript'>alert('a ocurrido un erro al actualizar la informacion personal en el  servidor.por favor intentelo de nuevo');</script>";	

header("location: profile.php");


  }
 }
 ?>
 

























