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
    $year=$_POST['year'];
    $mencion=$_POST['mencion'];
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
          <div class="form-group">

    <a href="index.php" class="btn btn-dark float-md-left"><span class="icon icon-undo2"></span></a>
<br>

              <img src="<?php echo $ruta; ?>" class="rounded" class="mx-auto"/>


                  <h5 class="text-*-center display-5"> </h5>

   <h5 class="display-5  font-weight-bolder  text-body color-dark float-md-left">Alumnos de <?php echo $year." de ".$mencion;?></h5>
   <br>
   
<div class="responsive-table-sm">
 <table class="table table-dark table-hover table-sm">
  <thead>
    <tr>
  <th>
Foto
  </th>
   <th>
   Nombre
   </th>

    <th>
    Apellidos
    </th>

                </th>

                                <th>
Cedula de identidad
                                </th>
  </tr>
 </thead>
 <tbody>
   <?php
require("connect_db.php");



$consulta2="SELECT img,id_alumno,name,lastname,year,mencion,ci FROM alumnos WHERE year='$year' and mencion='$mencion' ";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  echo "<tr><td ><img  style='max-width:80px;' src='/images/".$fila['0']."'/></td>";

echo "<td>".$fila['2']."</td>";
echo "<td >".$fila['3']."</td>";
echo "<td >".$fila['6']."<form action='subir_nota4.php' method='post'><input type='text' name='student_id' style='display:none;' value='".$fila['1']."'><input type='text' name='teacher_id' style='display:none;' value='".$profesor."'><input class='btn btn-info float-md-right' type='submit' name='submit' value='siguiente'></form>  </td></tr>";

}


?>
</div>
   <br>
</div>



   <div>

<!--Fin formulario registro -->

  <script src="demo-files/liga.js"></script>
  <script src="demo-files/demo.js"></script>



</body>
</html>
