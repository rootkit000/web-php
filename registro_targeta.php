<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<?php
// se reciben las variables
$imagen_targeta=$_POST['targeta'];
if($imagen_targeta=='visa.png'){
$banco="visa";    
}
if($imagen_targeta=='maestro.png'){
    $banco="maestro";    
    }

    if($imagen_targeta=='mastercard.png'){
        $banco="mastercard";    
        }
$card_number=$_POST['card_number'];



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





require("connect_db.php");
if ($mysqli) {
	echo "conexion exitosa";
}
else
{
echo "no se pudo conectar con la base de datos";
echo "$sql";	
}



$sql="INSERT INTO targetas(id_card,bank,number,img,id_user,current) VALUES('','$banco','$card_number','$imagen_targeta','$id_user','false')";
 $resultado=mysqli_query($mysqli, $sql);

if ($sql) {
	header("location: index.php");
}
 else
 {
 echo("a ocurrido un erro al subir la imagen al servidor.por favor intentelo de nuevo");	
 }



 ?>
 