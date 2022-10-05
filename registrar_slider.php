<!DOCTYPE html>
 <link href="demo.css" type="text/css" rel="stylesheet"></link>

<?php

   require("connect_db.php");
require("connect_db.php");
$consulta="SELECT img FROM app_info  WHERE id='1';";

$resultado=mysqli_query($mysqli,$consulta);

while($fila=mysqli_fetch_array($resultado))
{
$ruta=$fila["img"];
}
?>

<html>
<head><!--Cargar stilo-->


<?php


require("include/cabecera.php");
require("include/cabecera_admin.php");
require("include/menu.php");
 ?>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--stilos-->
	<title><?php echo "$titulo"; ?> </title>
<style type="text/css">
   #div
{
width: 76vw;
margin-left:12vw;
margin-right: 60vw;

padding: 3.5vh;
margin-top:10vh;
box-shadow: black 0px 10px 9px;
}

body
{
background-repeat: no-repeat;
background-size: 100%;
background-attachment: fixed;
}

/*borde*/;
box-shadow: gray 1px 1px 1px 1px;
/* poosicion del titulo*/
padding: 0px;
margin: 0px;
}
</style>
</head>
<body>
<!--imagen de fondo
<img src="images/login.png">
-->


<!--formulario de registro de alumnos-->
<div id="div" class="clearfix">
<center>
<form accept-charset="utf-8" action="registro_slider.php" enctype="multipart/form-data" method="POST">

          <div class="form-group">

    <a href="index.php" class="btn btn-dark float-md-left"><span class="icon icon-undo2"></span></a>
<br>

              <img src="<?php echo $ruta; ?>" class="rounded" class="mx-auto"/>


                  <h5 class="text-*-center display-5"> </h5>

   <h5 class="display-5  font-weight-bolder  text-body color-dark float-md-left">Agregar slider </h5>
   <br>

   <b>Titulo </b>
   <input type="text" name="name"  required placeholder="nombre" class="form-control form-control-sm" />


   <b>Descripcion</b>
   <textarea name="description"  required placeholder="descripcion del producto" class="form-control form-control-sm" ></textarea>

<br>
<b>Fecha</b>
<input type="date" name="price"  required placeholder="precio" class="form-control form-control-sm" />

  

<input type="file" name="imagen" required>
   <input  class="btn btn-dark float-md-right" type="submit" name="submit" value="Agregar slider"/>

</div>
</form>


   <div>

<!--Fin formulario registro -->

  <script src="demo-files/liga.js"></script>
  <script src="demo-files/demo.js"></script>



</body>
</html>
