<!DOCTYPE html>
<html>
<?php
require("connect_db.php");

$consulta2="SELECT color_gradient,color_gradient2,color_gradient3 FROM config WHERE id='1'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  $color=$fila['0'];
  
  $color2=$fila['1'];

  
  $color3=$fila['2'];
}



$consulta2="SELECT nombre,img,description,footer FROM app_info WHERE id='1'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  $app_name=$fila['0'];
  $app_img=$fila['1'];
  $description=$fila['2'];
  $footer=$fila['3'];
}


function hex2rgba($color, $opacity = false) {
 
	$default = 'rgb(0,0,0)';
 
	//Return default if no color provided
	if(empty($color))
          return $default; 
 
	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}


/* Here's a usage example how to use this function for dynamicaly created CSS */
 

$rgba = hex2rgba($color, 0.6);

$rgba2 = hex2rgba($color2, 0.7);

$rgba3 = hex2rgba($color3, 0.9);


/* CSS output */
 
echo '<style>	
body

{
  background: linear-gradient(to bottom right,'.$rgba.','.$rgba2.', '.$rgba3.' );
  background-repeat: no-repeat;
  background-size: 100%;
  background-attachment: fixed;
  }
</style>';
?>


<!DOCTYPE html>
 <link href="demo.css" type="text/css" rel="stylesheet"></link>

<?php

   include("include/cabecera_index.php");
   require("connect_db.php");
   if (@!$_SESSION['user'])
   {

   }
   elseif ($_SESSION['rol']==1)
   {
      header("Location:admin.php");
   }

   elseif ($_SESSION['rol']==2)
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <!--Cargar stilo-->


  <link href="style.css" type="text/css" rel="stylesheet"></link>

 <link href="demo.css" type="text/css" rel="stylesheet"></link>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">

<!-- Popper JS -->
<script src="/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<?php   require("include/menu.php");?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--stilos-->
	<title><?php echo "$titulo"; ?> </title>
<style type="text/css">
   #div
{
width: 76vw;
background-color:rgba(0,0,0, 0.2);
margin-left:12vw;
margin-right: 60vw;

padding: 3.5vh;
margin-top:10vh;
box-shadow: black 0px 10px 9px;
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


<!--Formulario de inicio de sesion-->
<div id="div" class="clearfix">
<center>
<form method="post" action="registro.php" class="was-validated clearfix">
          <div class="form-group">

    <a href="index.php" class="btn btn-dark float-md-left"><span class="icon icon-undo2"></span></a>
<br>

              <img src="/logo/<?php echo $ruta; ?>" class="rounded" class="mx-auto"/>


                  <h5 class="text-*-center display-5"> </h5>

   <h5 class="display-5  font-weight-bolder  text-body color-dark float-md-left">Registro</h5>
<hr>
   <br>

   <b>Ingresa tu nombre</b>
   <input type="text" name="realname"  placeholder="Ingresa tu nombre" class="form-control form-control-sm" />
   <b>Ingresa tu email</b>
   <input type="mail"  name="nick"  placeholder="Ingresa tu mail" class="form-control form-control-sm" />

    <b>CEDULA DE IDENTIDAD</b>
   <input type="number"  name="ci"  placeholder="Ingresa tu CEDULA" class="form-control form-control-sm" />



   <b>Ingresa tu Contraseña</b>
   <input type="password" name="pass" required="true"  placeholder="ingresesa contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  class="form-control form-control-sm" />

      <div class="invalid-feedback">Por favor asegurate que tu contraseña contenga mas 8 caracteres, una mayuscula y un numero.</div>

   <b>Repite tu contraseña</b>
   <input type="password" name="rpass" required="true" required placeholder="repite contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  class="form-control form-control-sm" />

      <div class="invalid-feedback">Las contraseñas no coinciden.</div>

 <b>Codigo de activacion</b>

   <input type="text" name="rcode" required="true" required placeholder="codigo"   class="form-control form-control-sm" />

      <div class="invalid-feedback">Comprueba el codigo de actvacion.</div>


   <br>
   <input  class="btn btn-dark float-md-right" type="submit" name="submit" value="Registrarse"/>

</div>
</form>


   <div>

<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
   ?>
<!--Fin formulario registro -->

  <script src="demo-files/liga.js"></script>
  <script src="demo-files/demo.js"></script>



</body>
</html>
