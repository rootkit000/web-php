
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




<html>
<body>

<!-- VERIFICAR QUE EL USUARIO HAYA O NO INICIADO SESION DESDE UN ARCHIVO PHP EXTERNO-->

<?php

   require("include/cabecera_index.php");


   if (@!$_SESSION['user'])
   {

   }
   elseif ($_SESSION['rol']==1)
   {

      header("Location:admin.php");
   }

   elseif ($_SESSION['rol']==2)
   {
      header("Location:index.php");
   }

   ?>

<head>

<!--Cargar stilo-->

  <!--icono de la pagina-->
<link rel="icon" type="image/png" href="logo.png" id="pagelogo" />
<!--meta-->
<!-- SCRIPTS JS-->
 <!--Cargar stilo-->


  <link href="style.css" type="text/css" rel="stylesheet"></link>

 <link href="demo.css" type="text/css" rel="stylesheet"></link>
  <!--icono de la pagina-->

<meta http-equiv="Content-type" content="text/html; charset=utf-8">







<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--stilos-->
	<title><?php echo "$app_name"; ?> </title>
<style type="text/css">
/*titulo de cabecera*/
#app_div
{
padding: 6%;
float: center;
margin: 9%;
background-color:rgba(0,0,0, 0.4);
width: 25%;
height: 15%;
border-radius: 10%;
}
/*imagen de fondo*/
/*
img
{
position: fixed;
z-index: -100;
height: 100%;
width: 100%;
margin: 0px;
padding: 0px;
}*/
#div_login
{
width: 76vw;
background-color:rgba(0,0,0, 0.4);
margin-left:12vw;
margin-right: 60vw;

padding: 3.5vh;
margin-top:10vh;
box-shadow: black 0px 10px 9px;
}

      #div {
    
        background-color: white;
        margin: 0px;
        padding: 2%;
        margin-top: 60px;
        box-shadow: black 0px 10px 9px;
        margin-right: 0%;
        margin-left: 21%;
        font-size: 100%;
        max-width: 50%;
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
<!--Formulario de inicio de sesion-->
<div id="div_login" class="clearfix">
<center>
      <form action="validar.php" method="post" class="was-validated clearfix">
          <div class="form-group">
              <img  <?php echo "src='/logo/".$app_img."''"; ?>  , style="max-width: 120px; max-height: 120px;" class="rounded" class="mx-auto"/>
                  <h5 class="text-*-center display-5"> </h5>
                    <br>


  <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend ">
        <span class="input-group-text"><span class="icon icon-mail"></span> </span>

      </div>






<input type="email" name="mail" class="form-control form-control-sm " >

      <div class="invalid-feedback">Por favor introduzca un corre electronico valido.</div>
</div>
  <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend ">
        <span class="input-group-text"><span class="icon icon-key"></span> </span>

      </div>


<input  type="password" name="pass" placeholder="Contraseña" class="form-control form-control-sm">
</div>
<br>
<button  class="btn btn-dark" type="submit" > Iniciar   <span class="icon icon-enter" id="login_text"></span></button>
<br>

<br>
<a href="registrar.php" class="btn btn-dark float-lg-right">Registrarse
<span class="icon icon-address-book"></span></a>
    </div>
     </form>


   <div>

</body>

  <script src="demo-files/liga.js"></script>
  <script src="demo-files/demo.js"></script>
</html>
