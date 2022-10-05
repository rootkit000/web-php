<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<?php
// se reciben las variables
$identificador=$_POST['id_product'];
$nombre_producto=$_POST['name'];
$descripcion=$_POST['description'];
$precio=$_POST['price'];




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


	$carpeta=$_SERVER['DOCUMENT_ROOT']. '/images/';
	move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta.$nombre);


     
}

require("connect_db.php");
if($nombre==''){


$sql="UPDATE slider SET title='$nombre_producto' , description='$descripcion',price='$precio' WHERE id_slider='$identificador'";
$resultado=mysqli_query($mysqli, $sql);

    echo "<script>location.href='config.php'</script>";    
}
else{require("connect_db.php");
    $sql="UPDATE slider SET title='$nombre_producto' ,img='$nombre', description='$descripcion',price='$precio' WHERE id_slider='$identificador'";
    $resultado=mysqli_query($mysqli, $sql);
    
echo "<script>location.href='config.php'</script>";    
}
echo "this is the name of the picture".$nombre;


/*mostrar imagen*/







 ?>
 