<!DOCTYPE html>

<!--Cabecera de la pagina-->

 <head>

 <!--Cargar stilo-->

  <link href="style.css" type="text/css" rel="stylesheet"></link>

  <!--icono de la pagina-->
<link rel="icon" type="image/png" href="logo.jpg" id="pagelogo" />

<meta http-equiv="Content-type" content="text/html; charset=utf-8">

<!--codigo para hacer elementos que aparecen encima uno de otro-->
<style>
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 100%;
    left: 50%;
    margin-left: -60px;

    /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
    opacity: 0;
    transition: opacity 1s;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}
</style>

<!--estilo que cambia dependiendo del tamaño de la pantalla-->

<style>
/*este es el estilo que se vera despues de que la pantalla sea menor a 480px*/

#minecraft {
  width: 100%;
  height: 100%;
  box-shadow: gray 10px 10px 10px;

}
/* este es el elemento para pantallas grandes*/
@media screen and (min-width: 480px) {
    #minecraft {
      width: 100%;
      height: 100%;
      box-shadow: black 10px 10px 10px;
transition: transform 2s;
    }
    #minecraft:hover {
      width: 100%;
      height: 100%;
      box-shadow: cyan 10px 10px 10px;
      transform: rotateY( 200deg);

    }
}
</style>

<!--titulo-->
<title>pagina</title>
<!--Fin de titulo-->

<!-- see http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/quick-tip-dont-forget-the-viewport-meta-tag -->
<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1.0, user-scalable=no">

<!--Scripts-->
	<?php
	session_start();
	$id_user=$_SESSION['id'];
  if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>
<!--codigo para mostrar la imagen de usuario-->
<?php
require("connect_db.php");
$consulta="SELECT img FROM imgs  WHERE id='$id_user';";

$resultado=mysqli_query($mysqli,$consulta);

while($fila=mysqli_fetch_array($resultado))
{
$ruta=$fila["img"]; 
}
?>

  
  </head>
<body>
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>

</div>
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

<body onload="revelar();" id="body">

<!--Cabecera de la pagina-->

<header id="header" class="header2" onload="revelar();">
       

</ul>

<ul>
  <li>
    <a href="subir.php">
    <!--boton de usuario decide que imagen ponerle-->
  <img src="/images/<?php echo $ruta; ?>" id="logoimg"/>
    </a>
</li>

<li id="logoimg">
   <a href="#news">
   <!--Titulo de la pagina-->
   <!--boton de ocultar elemento/el titulo tambien oculta el elemento pero se puede remplazar por un boton/-->
   <p id="Cabecera" onclick="menu_action();">
<?php echo "<p>".$titulo."</p>"; ?> </p>
 </a>
</li>

<li id="logoimg">
   <a href="#contact">
  <!--boton de cambiar el fondo-->
       <button onclick="changebg();" id="style_btn">
        estilo
      </button>
   </a>
</li>

<li style="float:right">
  <a class="active" href="#about">
    <!--Nombre de usuario-->
<?php echo "<p>".$_SESSION['user']."</p>";?>
  </a>
</li>
<!--boton de cerrar sesion-->
<li style="float:right">
  <a class="active" id="close_cennection" href="desconectar.php">
    <!--Nombre de usuario-->

<p > Cerrar Cesión </p>
  </a>
</li>
</ul>
<div>     
</div>
<nav>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color:#333;
}
</style>
</head>
<body>

<ul>
<script type="text/javascript">
function changebg()

{
var x = document.getElementById('body');
    if (x.style.backgroundColor === 'darkgrey') {
        x.style.backgroundColor = 'black';
    }
    else {
        x.style.backgroundColor = 'darkgrey';
    }


var z = document.getElementById('div');
    if (z.style.backgroundColor === 'blue') {
        z.style.backgroundColor = 'darkgrey';
    }
    else {
        z.style.backgroundColor = 'blue';
    }
}
</script>


</nav>

</header>





<!--contenido de la pagina-->
<!--nota tienes que poner un margin hacia arriba-->
<section>

<h1 style="opacity: 0;">Articulo</h1>



<div id="div">

<form action="publicar.php" enctype="multipart/form-data" method="POST">
<input type="file" name="imagen">

<form action="publicar.php"  method="POST">
<input type="text" name="status">
<input type="submit" value="actualizar">  

</div>
  
<!--codigo para mostrar la imagen de usuario-->
<?php
require("connect_db.php");

/*-----------------------------------------------------*/

$consulta2="SELECT user_id,status,content,name FROM publicacion;";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  echo "<div id='div'>"."<th>"."<img"." id='logoimg' src="."'"."/images/"."$ruta"."'"."<img"." src=" ."'"."images/".$fila['2']."'"."alt=''".">".$fila['3']."</th>"; 

echo "<p>".$fila['1']."</p>"."</div>"; 
}

?>
<!--este es el codigo de un objeto que aparece encima de otro solo si el mouse se coloca encima parecido a una nota-->

      <!--div class="tooltip">
  <span class="tooltiptext">
  </span>
  </div>
  <!- -->




</section>

</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<center>
<?php echo "<h1>".$titulo."</h1>"; ?>
 </center></footer>
</div><!-- /container -->
    
	</style>
  </body>
</html>