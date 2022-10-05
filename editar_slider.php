<!DOCTYPE html>
 <link href="demo.css" type="text/css" rel="stylesheet"></link>

<?php

$identifier_of_product=$_POST['id_slider'];
   include("include/cabecera.php");
   require("connect_db.php");
   session_start();
   if (@!$_SESSION['user'])
   {
    header("Location:index2.php");

   }

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

  <!--icono de la pagina-->
<link rel="icon" type="image/png" href="logo.png" id="pagelogo" alt="logo"/>
<!--meta-->
<!-- SCRIPTS JS-->
 <!--Cargar stilo-->


  <link href="style.css" type="text/css" rel="stylesheet"></link>

 <link href="demo.css" type="text/css" rel="stylesheet"></link>
 <link rel="icon" type="image/png" href="logo.png" id="pagelogo" />
  <!--icono de la pagina-->

<meta http-equiv="Content-type" content="text/html; charset=utf-8">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/bootstrap/4.3.1/css/bootstrap.css">


<!-- jQuery library -->
<link rel="stylesheet" href="/bootstrap/js/jquery.js">


<link rel="stylesheet" href="/bootstrap/js/jquery-1.8.3.min.js">


<!-- Popper JS -->
<script src="/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="/bootstrap/4.3.1/js/bootstrap.js"></script>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--stilos-->
	<title><?php echo "$titulo"; ?> </title>
<style type="text/css">
   #div
{
width: 76vw;
background-color:rgba(70,0,0, 0.4);
margin-left:12vw;
margin-right: 60vw;

padding: 3.5vh;
margin-top:10vh;
box-shadow: black 0px 10px 9px;
}

body
{
background: linear-gradient(to bottom right, rgba(120, 0, 44, 0.7), rgba(50, 40, 40,0.7),rgba(60, 30, 30,0.7), rgba(150, 0, 50, 0.9) );
background-repeat: no-repeat;
background-size: 100%;
background-attachment: fixed;
}

/*borde*/;
box-shadow: gray 1px 1px 1px 1px;

padding: 0px;
margin: 0px;
/* poosicion del titulo*/
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
<a href="index.php" class="btn btn-dark float-md-left"><span class="icon icon-undo2"></span></a>
<br>

</center>



<br>
<?php





require("connect_db.php");



$consulta2="SELECT title,img,description,price FROM slider WHERE id_slider='$identifier_of_product'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
    echo "<center>";
    echo "<div style='background-color:gray; width:40vw;' border-radius:3px; border:solid black ,10px;>";
    echo "<center>";
echo "<h1>Producto a editar o borrar</h1>";
  echo "<img style='width:80%; height:25vh;' src='images/".$fila['1']."'/><br><p>Nombre:".$fila['0']."</p>";

echo "<p>Descripcion: ".$fila['2']."</p>";
echo "<p> Precio :S/".$fila['3']."</p><br>";
echo "</center>";
echo "</div>";
$title=$fila['0'];
$description=$fila['2'];
$imagen=$fila['1'];
$precio=$fila['3'];
}


?>

<center>
<form accept-charset="utf-8" action="update_slider.php" enctype="multipart/form-data" method="POST">

          <div class="form-group">

                  <h5 class="text-*-center display-5"> </h5>

   <br>

   <b>nombre de producto </b>
   <input type="text" name="name"  required placeholder="nombre" class="form-control form-control-sm" value="<?php echo $title; ?>"/>


   <b>Descripcion</b>
   <textarea name="description"  required placeholder="descripcion del producto"   class="form-control form-control-sm" ><?php echo $description; ?></textarea>

<br>
<b>Precio</b>
<input type="text" name="price"  required placeholder="precio"  value="<?php echo $precio; ?>" class="form-control form-control-sm" />

<input type="text" name="id_product" style="display:none;" required placeholder="id" value="<?php echo $identifier_of_product; ?>" class="form-control form-control-sm" />
  

<input type="file" name="imagen">
   <input  class="btn btn-dark float-md-right" type="submit" name="submit" value="Editar Slider"/>

</div>
</form>

<form action="delete_slider.php" method="post">
<input type="text" name="id_product" style="display:none;" required placeholder="id" value="<?php echo $identifier_of_product; ?>" class="form-control form-control-sm" />

   <input  class="btn btn-danger float-md-left" type="submit" name="submit" value="!Borrar Slider!"/>

</div>
</form>

<!--Fin formulario registro -->

  <script src="demo-files/liga.js"></script>
  <script src="demo-files/demo.js"></script>



</body>
</html>
