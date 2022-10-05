<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
$id_user=$_SESSION['id'];
require("connect_db.php");
if ($mysqli) {
	echo "conexion exitosa";
mysqli_set_charset($mysqli,"utf8");
}
else
{
	echo "lacagaste";
}

$consulta="SELECT img FROM imgs  WHERE id='$id_user';";

$resultado=mysqli_query($mysqli,$consulta);

while($fila=mysqli_fetch_array($resultado))
{
$ruta=$fila["img"];	
}
/*codigo para que me regrese a el administrador*/
header("Location:admin.php")
  
  ?>
  <div>
  	<img src="/images/<?php echo $ruta; ?>" alt="imagen del primer articulo xd">
  </div>
</body>
</html>