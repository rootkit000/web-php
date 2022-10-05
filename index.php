<!DOCTYPE HTML>



<?php
require("connect_db.php");


$consulta2="SELECT nombre,img,description,footer FROM app_info WHERE id='1'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  $app_name=$fila['0'];
  $app_img=$fila['1'];
  $description=$fila['2'];
  $footer=$fila['3'];
}


$consulta2="SELECT color FROM config WHERE id='1'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  $color=$fila['0'];
}




?>


<!--Cabecera de la pagina-->


  <?php
  include("include/cabecera_index.php");
  include("include/menu.php");
  ?>





<body style="background-color: darkgrey;">
<div class="container-fluid" style="background-color: darkgrey;">





<style type="text/css">
    img{
     max-width:100%;
     max-height: 100%;   
    }
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
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="js/jquery.flexslider.js"></script>
  <?php include("include/menu.php");?>


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




<!--contenido de la pagina-->
<!--nota tienes que poner un margin hacia arriba-->
<section style="background-color: darkgrey;">





<!--Contenido de la pagina-->

<?php  echo $description;?>


  <?php include("galeria.php");?>

</div>
oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>oadsh<br>

</div>
</section>

<!-- Pie de pagina-->

<footer id="footer">
<center>
&copy;<?php echo $titulo."</h1>"; ?>
<?php echo $footer; ?> 

</footer>
<!-- /container -->
  <script src="demo-files/liga.js"></script>
  <script src="demo-files/demo.js"></script>

  <?php
  if(@!$_SESSION['user']){

$cookie_cookie = "cookie";
$cookie_value = "agree";
if(!isset($_COOKIE[$cookie_cookie])) {
    echo "<div class='alert alert-info alert-dissmissible' style='position:fixed;  z-index:1032; left:0%; bottom:0%; color:white; text-shadow:1px 1px 4px black; background-color:".$color."; width:100%; font-size:3vh; margin:0px;'>Este sitio Web utiliza cookies para mejorar la navegacion, Al continuar navegando aceptas el uso de cookies.<a href='terms.php'> <a href='terms.php' data-toggle='tooltip' title='Terminos'>Mas informacion</a></a><button type='button' class='close' data-dismiss='alert' id='cookie_btn'>&times;</button></div>";
  
      
}
  }
?>
  </body>
</html>
