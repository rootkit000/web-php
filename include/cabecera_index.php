
 <head>

  <?php session_start();










  ?>

 <!-- SCRIPTS JS-->
    <script src="jquery-3.3.1.min.js"></script>

    <script>

$(document).ready(function(){
  $("#cookie_btn").click(function(){
    $.get("cookie.php", function(data, status){
    });
  });
});</script>


    <!--Cargar stilo-->

<?php
require("connect_db.php");
$consulta="SELECT nombre FROM app_info  WHERE id=1;";

$resultado=mysqli_query($mysqli,$consulta);

while($fila=mysqli_fetch_array($resultado))
{
$titulo=$fila["nombre"]; 
}




$consulta2="SELECT nombre,img,footer FROM app_info WHERE id='1'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  $app_name=$fila['0'];
  $app_img=$fila['1'];
  $footer=$fila['2'];


}


$consulta2="SELECT color FROM config WHERE id='1'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  $color=$fila['0'];
}

?>


  <link href="style.css" type="text/css" rel="stylesheet"></link>

 <link href="demo.css" type="text/css" rel="stylesheet"></link>
  <!--icono de la pagina-->
<link rel="icon" type="image/png" href="/logo/<?php echo $app_img;?>" id="pagelogo" />

<meta http-equiv="Content-type" content="text/html; charset=utf-8">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<!--titulo-->
<title><?php echo $app_name?></title>
<!--Fin de titulo-->

<!-- see http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/quick-tip-dont-forget-the-viewport-meta-tag -->
<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1.0, user-scalable=no">


<script src="tooltip.js"></script>


  </head>
