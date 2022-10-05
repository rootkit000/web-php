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

<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1.0, user-scalable=no">


  </head>
<body style="background-color: darkgrey;">
<div class="container-fluid" style="background-color: darkgrey;">

<header class="header">
  <?php
  include("include/cabecera.php");

require("include/cabecera_admin.php");
  ?>

</header>


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

</div>
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
        <a class="dropdown-item"  href="alumno.php">alumnos</a>';
   }
   else
   {
       echo "<p>".$_SESSION['user']."</p>";
      echo ' <a class="dropdown-item"  href="desconectar.php">


       Cerrar sesion
       <span class="icon icon-switch"></span>
       </a>';

       echo '  <a class="dropdown-item"  href="config.php">Configuracion</a>';
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
</style>
</head>
<body style="background-color: darkgrey;">

<ul>

</nav>

</header>

<!--contenido de la pagina-->
<section style="background-color: darkgrey;">


<h1 style="opacity: 0;">Articulo</h1>





<!--Contenido de la pagina-->
<section style="background-color: darkgrey;">
<?php





require("connect_db.php");



$consulta2="SELECT header,content,active,active_slider,coin FROM config WHERE id='1'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  $header=$fila['0'];
  $content=$fila['1'];
$active=$fila['2'];
$active_slider=$fila['3'];
$coin=$fila['4'];
}

$consulta2="SELECT nombre,img,description,footer,aboutus FROM app_info WHERE id='1'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  $app_name=$fila['0'];
  $app_img=$fila['1'];

  $description=$fila['2'];
  $footer=$fila['3'];
  $aboutus=$fila['4'];

}



?>

<h1 style="opacity: 0;">Articulo</h1>
<div class="jumbotron">
<h1 class="display-4">Configurar el hader de la pagina</h1> 
<form accept-charset="utf-8" method="post" action="config_header.php" class="was-validated">
  <div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" id="switch1" name="active" <?php if($active=='on'){ echo "checked";} ?> value="on">
    <label class="custom-control-label" for="switch1">Cabecera</label>
  </div> 
  <div class="custom-control custom-switch">
  
  <input type="checkbox" class="custom-control-input" id="switch2" name="active_slider" <?php if($active_slider=='on'){ echo "checked";} ?> value="on">
    <label class="custom-control-label" for="switch2">Slider</label>
  </div> <hr>  
<input type="text" style="font-size:5vh;" class="form-control" required name="header" value="<?php echo$header;?>"/> 
  <p>
<textarea type="text"  name="content"  required class="form-control"><?php echo$content;?></textarea> 
<br>
<label for="color">Color de cabecera</label>
<input type="color" class="form-control"  style=" width:10vw; padding:none; border:0px; margin:0px;" name="color" id="color">

  <h1>Moneda</h1>
<input type="text" style="font-size:5vh;" class="form-control" required name="coin" value="<?php echo$coin;?>"/> 
  <p>
<button type="submit" class="btn btn-primary float-md-right" style="font-size:3vh;" font-family:arial black;>Guardar</button>

<label for="color-gradient">Color de gradiente 1</label>
<input type="color" class="form-control"  style=" width:10vw; padding:none; border:0px; margin:0px;" name="color_gradient" id="color_gradient">


<label for="color-gradient2">Color de gradiente 2</label>
<input type="color" class="form-control"  style=" width:10vw; padding:none; border:0px; margin:0px;" name="color_gradient2" id="color_gradient2">


<label for="color-gradient3">Color de gradiente 1</label>
<input type="color" class="form-control"  style=" width:10vw; padding:none; border:0px; margin:0px;" name="color_gradient3" id="color_gradient3">

</form>
</p> 


</div>




<div class="flexslider" style="width:100%; height:70vh;">
    <ul class="slides" style="width:100%; height:70vh;">
    <?php
    
require("connect_db.php");



$consulta2="SELECT title,description,price,img,id_slider FROM slider";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{

  echo"<li><form action='editar_slider.php' method='post' accept-charset='utf-8'>";
  echo "<img src='/images/".$fila['3']."' alt='".$fila['3']."' style='width:100%; height:60vh;'/>";
  echo "<section class='flex-caption'>";
  echo "<p style='font-family:verdana; font-size:5vh; font-weight:bolder;' >".$fila['0']."<br><span id='text_slider'>".$fila['1']."</span><br>"."precio:".$fila['2']."<br><button type='submit' class='btn btn-warning'>Editar</button>";
  echo "<input type='text' style='display:none; 'name='id_slider' value='".$fila['4']."'></form>";
  echo "</><br>";
  echo "</section>";
  echo "</li>";
 /*elementos del slider*/
 


}


?>



		</ul>
	</div>

    <a href="registrar_slider.php" class='btn btn-warning' style='width:100%; font-size:5vh; height:9vh; color:white; font-family:verdana ;'>Agregar slider</a>


<!--Contenido de la pagina-->

<div id="div">

<h1 class="display-4">Configurar el Nombre y logo de la pagina de la pagina</h1>
<form accept-charset="utf-8" action="update_app_info.php" enctype="multipart/form-data" method="POST">

          <div class="form-group">

                  <h5 class="text-*-center display-5"> </h5>

   <br>

   <b>Nombre </b>
   <input type="text" name="name_app"  required placeholder="nombre" class="form-control form-control-sm" value="<?php echo $app_name; ?>"/>


   <br>

   <b>Descripcion </b>
   <textarea type="text" name="description"  required placeholder="Descripcion" class="form-control form-control-sm" ><?php echo $description; ?></textarea>

   <br>


   <h1>Pie de pagina</h1>

<textarea type="text"  name="footer"  required class="form-control"><?php echo$footer;?></textarea> 
<br>


<h1>Sobre nosotros</h1>

<textarea type="text"  name="abouts"  required class="form-control"><?php echo$aboutus;?></textarea> 
<br>



<br>
<center><img src="/logo/<?php echo $app_img;?>"></center><br><br>
<input type="file" name="imagen" class='form-control form-control-sm'>
<br>
   <input  class="btn btn-primary float-md-right" type="submit" name="submit" value="Guardar"/><br>

</div>
</form>



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
