<!DOCTYPE html>
 <link href="demo.css" type="text/css" rel="stylesheet"></link>

<?php

   include("include/cabecera.php");
   require("connect_db.php");
   session_start();
   if (@!$_SESSION['user'])
   {
    header("Location:index2.php");

   }

	$profesor=$_POST['teacher_id'];
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
background-color:rgba(0,70,0, 0.4);
margin-left:12vw;
margin-right: 60vw;

padding: 3.5vh;
margin-top:10vh;
box-shadow: black 0px 10px 9px;
}

body
{
background: linear-gradient(to bottom right, rgba(0, 120, 44, 0.7), rgba(40, 50, 40,0.7),rgba(30, 60, 30,0.7), rgba(0, 150, 50, 0.9) );
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
<form method="post" action="subir_nota3.php" class="was-validated clearfix">
          <div class="form-group">

    <a href="index.php" class="btn btn-dark float-md-left"><span class="icon icon-undo2"></span></a>
<br>

              <img src="<?php echo $ruta; ?>" class="rounded" class="mx-auto"/>


                  <h5 class="text-*-center display-5"> </h5>

   <h5 class="display-5  font-weight-bolder  text-body color-dark float-md-left">Seleccione el año y mencion </h5>
   <br>

   <b>Año </b>

   <select name="year" class="form-control">
<?php
require("connect_db.php");



$consulta2="SELECT year FROM years ORDER BY year asc";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  echo "<option>".$fila['0'];
echo "  "."</option>";
}
//el siguiente archivo recibira el nombre y id del profesor seleccionado

?>
</select>

   <b>Mencion</b>
   <select  name="mencion" class="form-control">
<?php

$obtenerAlumno="SELECT mencion FROM menciones ORDER BY mencion asc";

$variableAlumno=mysqli_query($mysqli,$obtenerAlumno);

while($Alumno=mysqli_fetch_row($variableAlumno))
{
  echo "<option>".$Alumno['0'];
echo "  "."</option>  ";
}


//el siguiente archivo recibira el nombre y id del alumno seleccionado
?>
</select>

   <input type="name" style="display:none;" name="teacher_id"  style="max-width:30vh;"  placeholder="nombre del profesor" <?php echo "value='$profesor'"; ?> class="form-control form-control-sm" />

   <input  class="btn btn-dark float-md-right" type="submit" name="submit" value="subir notas"/>

</div>
</form>


   <div>

<!--Fin formulario registro -->

  <script src="demo-files/liga.js"></script>
  <script src="demo-files/demo.js"></script>



</body>
</html>