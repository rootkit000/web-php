<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<?php
// se reciben las variables
$nombre_app=$_POST['name_app'];
$description=$_POST['description'];
$footer=$_POST['footer'];





?>


</head>
<body>

</body>
</html>
<?php

// se recibe la imagen

$nombre=$_FILES['imagen']['name'];
$tipo=$_FILES['imagen']['type'];
$tamaño=$_FILES['imagen']['size'];

/*destino de la imagen*/
if($tamaño<=1000000)
                   {


	$carpeta=$_SERVER['DOCUMENT_ROOT']. '/logo/';
	move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta.$nombre);


     
}

require("connect_db.php");
if($nombre==''){


    $sql="UPDATE app_info SET nombre='$nombre_app',description='$description',footer='$footer' WHERE id='1'";
    $resultado=mysqli_query($mysqli, $sql);

    echo "<script>location.href='config.php'</script>";    
}
else{require("connect_db.php");
    $sql="UPDATE app_info SET nombre='$nombre_app',img='$nombre',description='$description',footer='$footer' WHERE id='1'";
    $resultado=mysqli_query($mysqli, $sql);
    
echo "<script>location.href='config.php'</script>";    
}
echo "this is the name of the picture".$nombre;


/*mostrar imagen*/







 ?>
 