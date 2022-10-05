<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<?php
// se reciben las variables
$identificador=$_POST['id_product'];
$name=$_POST['name'];
$apellido=$_POST['apellido'];
$year=$_POST['year'];
$mencion=$_POST['mencion'];
$cedula=$_POST['cedula'];



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


$sql="UPDATE alumnos SET name='$name' , lastname='$apellido',year='$year' ,mencion='$mencion' ,ci='$cedula' WHERE id_alumno='$identificador'";
$resultado=mysqli_query($mysqli, $sql);

    echo "<script>location.href='admin_search.php'</script>";    
}
else{require("connect_db.php");
    $sql="UPDATE alumnos SET name='$name' ,img='$nombre', lastname='$apellido',year='$year',mencion='$mencion',ci='$cedula' WHERE id_alumno='$identificador'";
    $resultado=mysqli_query($mysqli, $sql);
    
echo "<script>location.href='admin_search.php'</script>";    
}
echo "this is the name of the picture".$nombre;


/*mostrar imagen*/



    



 ?>
 