<!DOCTYPE HTML>
<?php session_start();
   if (@!$_SESSION['user'])
   {

    echo "<script>alert(' inicia sesion ');</script>";

    echo "<script> window.location='index.php'</script>";

  }
   elseif ($_SESSION['rol']==1)
   {

   }

   elseif ($_SESSION['rol']==2)
   {

   }


  $id_user=$_SESSION['id'];
  if (@!$_SESSION['user']) {
    header("Location:index.php");
  }

?>
<?php
if(@!$_POST['query'])
{
  $producto='';

}
else{
  $producto=$_POST['query'];
} 
?>

<?php
require("connect_db.php");


$consulta2="SELECT nombre,img FROM app_info WHERE id='1'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  $app_name=$fila['0'];
  $app_img=$fila['1'];
}


$consulta2="SELECT color FROM config WHERE id='1'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  $color=$fila['0'];
}




?>
<!--
para poner un icono  se poe la etiqueta clas mas icon icon nombre del icono
class="icon icon-html-five2"

-->

<!--Cabecera de la pagina-->

 <head>

    <!-- SCRIPTS JS-->
    <script src="jquery-3.3.1.min.js"></script>
 <!--Cargar stilo-->


  <link href="style.css" type="text/css" rel="stylesheet"></link>

 <link href="demo.css" type="text/css" rel="stylesheet"></link>
  <!--icono de la pagina-->
<link rel="icon" type="image/png" href="logo.png" id="pagelogo" />

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

<!--titulo-->
<title>pagina</title>
<!--Fin de titulo-->

<!-- see http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/quick-tip-dont-forget-the-viewport-meta-tag -->
<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1.0, user-scalable=no">


  </head>
<body style="background-color: darkgrey;">
<div class="container-fluid" style="background-color: darkgrey;">

<header class="header">
  <?php
  include("include/cabecera.php");
  ?>

</header>


<!--script de ocultar y esconder los elementos en las paginas-->

<script type="text/javascript">
function menu_action()
{
var y = document.getElementById('item_1');
    if (y.style.display === 'none') {
        y.style.display = 'block';
    }
    else {
        y.style.display = 'none';
    }

    {
    var s=document.getElementById()
    }
}
</script>

<!--Fin de scripts-->

</head>

<!--  cambiar el logo de la aplicacion -->

</div>
<!--
<body onload="revelar();" id="body">
-->
<!--Cabecera de la pagina-->
</li>
<script type="text/javascript">
function mostrar() {

  document.getElementById("tabla_resultado").style.display="block";
}
/**/
function ocultar()
{

  document.getElementById("tabla_resultado").style.display="none";
}



</script>
</nav>
<nav class="navbar navbar-expand-sm navbar-dark fixed-top" id="navbarra" >

      <a class="navbar-brand" href="index.php">


    <!--boton de usuario decide que imagen ponerle-->

<!--codigo para mostrar la imagen de usuario-->
<?php
require("connect_db.php");
$consulta="SELECT img FROM app_info  WHERE id='1';";

$resultado=mysqli_query($mysqli,$consulta);

while($fila=mysqli_fetch_array($resultado))
{
$ruta=$fila["img"];
}
?>
<img  height="50vh" src="logo.png"/>

      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">

      <ul class="navbar-nav">

    </li>

    <li class="nav-item">


        </li>
      <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle "  href="#" id="navbardrop" data-toggle="dropdown">
Mas </a>
      <div class="dropdown-menu">

        <a class="dropdown-item" href="profile.php">

  <summary ><?php


        if (@!$_SESSION['user'])
   {
echo "<p>"."Iniciar sesion"."</p>";

echo '
        <a class="dropdown-item"  href="info.php">Sobre nosotros</a>';
   }
   else
   {
       echo "<p>".$_SESSION['user']."</p>";
      echo ' <a class="dropdown-item"  href="desconectar.php">


       Cerrar sesion
       <span class="icon icon-switch"></span>
       </a>';

       echo ' 
               <a class="dropdown-item"  href="info.php">Sobre nosotros</a>';
   }


      ?></summary>
</a>

    
      </div>
    </li>
      </ul>
   </div>
</nav>

<?php
echo "<style>

#navbarra{
  background-color:".$color.";
}

</style>
";
?>
<style>
#tabla_resultado
{
color: black;
background-color: white;
display: none;
position: fixed;
transition: 0.5s;
}
</style>
</head>
<body style="background-color: darkgrey;">

<ul>


</nav>

</header>

<!--contenido de la pagina-->
<section style="background-color: darkgrey;">






<div id="div">
<br>
<br>
    <h2>Buscar alumnos</h2>
    <p>Para ver las notas de un alumno buscalo por su nombre  , cedula o mencion y haz click en "ver notas"</p>
        <form accept-charset="utf-8" action="comprar.php" enctype="multipart/form-data" method="POST">

<b>nombre de alumno</b>
<div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend "> 
      <button  class="btn btn-dark float-md-right" type="submit" name="submit" value="Registrarse"><span class="icon icon-search"></span></button>
 

      </div>






<input type="search" name="query" class="form-control form-control-sm " placeholder="buscar..">

      <div class="invalid-feedback">no pudimos encontrar nada.</div>
</div>



</div>
</form>




<div style="background-color:rgba(04,0,04,0.5);">

<div class="container"><br>
 
  <div class="card-deck" style="width:80vw;">
</div>
<br>

<?php
require("connect_db.php");



$consulta2="SELECT name,img,lastname,mencion,year,id_alumno,ci FROM alumnos  WHERE name LIKE '%$producto%' OR lastname LIKE'%$producto%' OR ci LIKE '%$producto%' OR mencion LIKE '%$producto%' ORDER BY name ASC Limit 30;";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  echo "<div class='card' style='width:30vw'>"."<img class='card-img-top' alt='Card image' style='width:100%; height:40vh;' src="."'"."/images/".$fila['1']."'"."alt=''".">"."  <div class='card-body'>
  <h4 class='card-title'>".$fila['0']." ".$fila['2']."</h4><p class='card-text'>";
  
  echo "<form accept-charset='utf-8'";
  
  
  if(@!$_SESSION['user'])
  {echo "action='index.php'";}
  else{ echo "action='nota.php'";}
  
  echo "enctype='multipart/form-data' method='POST'>";
  echo "<p class='btn btn-dark'>Año: ".$fila['4']."</p><br><p class='btn btn-dark'>Mencion: ".$fila['3']."</p><br><button type='submit' class='btn btn-warning'>"."Ver notas"."</button></div>";


 echo "<input type='text' style='display:none;' name='id_product'value='".$fila['5']."'></form>";



echo "</div><br><br><br>";
}

?>
   
    
  </div>
</div>
</div>
</div>





</section>

</div>
<!-- Footer
      ================================================== -->
<style type="text/css">
#divslider
{
background-color:white;
padding: 0px;
margin-top:0px;
box-shadow: black 0px 10px 9px;
margin-right: 10.5%;
height: 70vh;
width: 100vw;
}

#publicacionimg
{
padding: 0px;
margin: 0px;
width: 100%;
height: 100%;
margin-top: 0px;
padding-top: 0px;
margin-left: 0.5%;
margin-right: 0.5%;
padding-left: 0.5%;
padding-right: 0.5%;
max-width: 98%;
max-height: 100%;
}

 #users_img
{
padding: 0px;
margin: 0px;
width: 100%;
height: 100%;
max-width: 50px;
max-height: 50px;
min-height: 40px
min-width:40px;
border-width: 1px;
border-color:gray;
border-style: solid;
}



#posttext
{
margin-bottom: none;
padding-bottom: none;
width: 100%;
height: 100%;
min-height: 150px;
resize: none;
border:none;
border: 0px;
margin:0px;
word-wrap: break-word;
font-size: 100%;
}
</style>
<footer id="footer">
<center>
&copy;<?php echo $titulo."</h1>"; ?>
 </center>
 </footer>
</div><!-- /container -->
  <script src="demo-files/liga.js"></script>
  <script src="demo-files/demo.js"></script>
  </style>

  </body>
</html>
