<!DOCTYPE HTML>


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
require("include/cabecera.php");
require("include/menu.php");




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


<meta http-equiv="Content-type" content="text/html; charset=utf-8">


<!-- Popper JS -->
<script src="/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


<!--titulo-->
<title><?php echo $app_name; ?></title>
<!--Fin de titulo-->

<!-- see http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/quick-tip-dont-forget-the-viewport-meta-tag -->
<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1.0, user-scalable=no">


  </head>
<body style="background-color: darkgrey;">
<div class="container-fluid" style="background-color: darkgrey;">




<!--Fin de scripts-->

</head>

<?php
echo "<style>

#navbarra{
  background-color:".$color.";
}

</style>
";
?>
<style>
      img{
     max-width:100%;
     max-height: 100%;
    }
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


</header>

<!--contenido de la pagina-->
<section style="background-color: darkgrey;">






<div id="div">
<br>
<br>
    <h2>Buscar</h2>
    <p>Para ver realizar una busqueda teclee el nombre o precio </p>
        <form accept-charset="utf-8" action="productos.php" enctype="multipart/form-data" method="POST">

<b>Buscar...</b>
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



$consulta2="SELECT user,img,lastname,email,id FROM login WHERE cedula LIKE '%$producto%'    AND rol='2' ORDER BY user ASC Limit 30;";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  echo "<div class='card' style='width:30vw; min-width:300px;'>"."<img class='card-img-top' alt='Card image' style='width:100%; height:40vh;' src="."'"."/images/".$fila['1']."'"."alt=''".">"."  <div class='card-body'>
  <h4 class='card-title'>".$fila['0']." <hr>".$fila['2']."</h4><p class='card-text'>";

  echo "<form accept-charset='utf-8'";


  if(@!$_SESSION['user'])
  {echo "action='index.php'";}
  else{ echo "action='nota.php'";}

  echo "enctype='multipart/form-data' method='POST'>";
  echo "<p class='btn btn-dark' style='display:none;'>Año: ".$fila['4']."</p><p class='btn btn-dark float-sm-left'>Precio: ".$fila['3']."</p><br><button type='submit' class='btn btn-warning' style='display:none;'>"."Ver notas"."</button></div>";


 echo "<input type='text' style='display:none;' name='id_product'value='".$fila['4']."'></form>";



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
<?php echo $footer; ?>
 </center>
 </footer>
</div><!-- /container -->
  <script src="demo-files/liga.js"></script>
  <script src="demo-files/demo.js"></script>
  </style>

  </body>
</html>
