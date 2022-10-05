<!DOCTYPE HTML>
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


<!--Cabecera de la pagina-->

 <head>
    <!-- SCRIPTS JS-->
    <script src="jquery-3.3.1.min.js"></script>
 <!--Cargar stilo-->


  <link href="style.css" type="text/css" rel="stylesheet"></link>

 <link href="demo.css" type="text/css" rel="stylesheet"></link>
  <!--icono de la pagina-->
<link rel="icon" type="image/png" href="/logo/<?php echo $app_img;?>" id="pagelogo" />

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
<title><?php echo $app_name?></title>
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

<script>
function changeimg(){
document.getElementById("imgform").style.display="block";
}
</script>

<style type="text/css">
#divslider
{
background-color:white;
padding: 0px;
margin-top:0px;
box-shadow: black 0px 10px 9px;
margin-right: 10.5%;
height: 70vh;
width: 100%;
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

<link rel="stylesheet" href="flexslider.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
    	touch: true,
    	pauseOnAction: false,
    	pauseOnHover: false,
    });
  });
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



<img height="50vh" src="/logo/<?php echo $app_img;?>"/>

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

        <a class="dropdown-item" <?php


if (@!$_SESSION['user'])
{
echo "href='index2.php'";

}
else
{
echo "href='profile.php'";
}


?>>

  <summary ><?php


        if (@!$_SESSION['user'])
   {
echo "<p>"."Iniciar sesion"."</p>";

echo '<a class="dropdown-item" href="info.php">Sobre nosotros</a>
        <a class="dropdown-item"  href="alumnos.php">alumnos</a>';
   }
   else
   {
       echo "<p>".$_SESSION['user']."</p>";
      echo ' <a class="dropdown-item"  href="desconectar.php">


       Cerrar sesion
       <span class="icon icon-switch"></span>
       </a>';

       echo '  <a class="dropdown-item"  href="info.php">Sobre nosotros</a>
               <a class="dropdown-item"  href="alumnos.php">Alumnos</a>';
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
#text_slider{
  font-family: verdana;
color:white;
background:rgba(0, 0, 0, 0.2);
padding:13vh;
font-size:2vh;
}
</style>
</head>
<body style="background-color: darkgrey;">

<ul>

</nav>

</header>

<!--contenido de la pagina-->
<!--nota tienes que poner un margin hacia arriba-->
<section style="background-color: darkgrey;">
<h1 style="opacity: 0;">Articulo</h1>


<div id="div">
  <h1 class="display-4">
    Informacion Personal
  </h1>
<?php
require("connect_db.php");
$consultaname="SELECT * FROM login  WHERE id='$id_user';";

$results=mysqli_query($mysqli,$consultaname);

while($fila=mysqli_fetch_array($results))
{
$user_name=$fila["user"];
$user_lastname=$fila["lastname"];
$user_photo=$fila["img"];
$user_mail=$fila["email"];

}
?>






<div class="responsive-table-sm">
 <table class="table table-dark table-hover">
  <thead>
    <tr>
  <th>
Imagen de perfil
  </th>
</tr>
  <tr>
<td><form action="enviar.php" enctype="multipart/form-data" method="POST" style="display:none;" id="imgform">
<input type="file" name="imagen" id="changeimg"  >
<input type="submit" value="enviar">

</form>


<?php echo "<img src='/images/"."$user_photo"."' style='max-width:80px; max-height:100px; 'class='rounded'>"?>
 <a class="btn btn-light btn-sm " href="#changei" onclick="changeimg()">cambiar</a>
</td>
</tr>
   <th>
    Nombre
  </th>
</tr>
<tr>

<tr>
<td>
        <form action="updateprofileinfo.php" method="post">
          <div class="form-group">
<input type="text" name="name" class="form-control form-control-sm" style="max-width:50vh;" <?php echo "value='"."$user_name"."'"?>
>
</td>
</tr>
 </tr>
   <th>
    Apellido
  </th>
</tr>
<tr>

<tr>
<td>
  <input type="text" name="lastname" class="form-control form-control-sm" style="max-width: 50vh"<?php echo "value='"."$user_lastname'"?>
>
</td>
</tr>

   <th>
     email

   </th>
  </tr>

<tr>
<td>
  <input type="mail" name="email" class="form-control form-control-sm" style="max-width:50vh;"<?php echo "value='"."$user_mail'"?>  >




<input type="submit" class="btn btn-sm btn-dark float-sm-right" value="Guardar">
</div>
</form>

</td>
</tr>
</tbody>
 </table>
</div>



</div>
<?php 

require("connect_db.php");



$consulta2="SELECT id_card FROM targetas WHERE id_user='$id_user'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
$conteo=$fila['0'];
}


?>

<!--codigo para mostrar la imagen de usuario-->




<!--este es el codigo de un objeto que aparece encima de otro solo si el mouse se coloca encima parecido a una nota-->

      <!--div class="tooltip">
  <span class="tooltiptext">
  </span>
  </div>
  <!- -->




</section>




</div>
</section>

<!-- Pie de pagina-->

<footer id="footer">
<center>
&copy;<?php echo $titulo."</h1>"; ?>
 </footer>
<!-- /container -->
  <script src="demo-files/liga.js"></script>
  <script src="demo-files/demo.js"></script>

  </body>
</html>
