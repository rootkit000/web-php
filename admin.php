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


  <link href="style.css" type="text/css" rel="stylesheet"></link>

 <link href="demo.css" type="text/css" rel="stylesheet"></link>
  <!--icono de la pagina-->
<link rel="icon" type="image/png" href="/logo/<?php echo $app_img;?>" id="pagelogo" />

<meta http-equiv="Content-type" content="text/html; charset=utf-8">


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



  <?php include("include/menu.php");?>



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
#inputtext{
background-color:rgba(58,58,63,10); 
color:white; 
}
</style>
</head>
<body style="background-color: darkgrey;">

<ul>

</nav>

</header>

<!--contenido de la pagina-->
<section style="background-color: darkgrey;">





<h1 style="opacity: 0;">Articulo</h1>


<div id="div">
  <h1 class="display-4">
    Informacion de usuarios
  </h1>

<div class="responsive-table-sm">
 <table class="table table-dark table-hover">
  <thead>
    <tr>
  <th>
Imagen de perfil
  </th>
   <th>
    Nombre
  </th>
  
  <th>
    ID de usuario
  </th>
   <th>
     email

   </th>
  </tr>
 </thead>
 <tbody>
<?php
require("connect_db.php");



$consulta2="SELECT user,email,img,id FROM login ORDER BY id asc";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  echo "<tr><td>"."<img"." style='max-height:80px; max-width:85px; min-height:80px; min-width:85px;' class='rounded' src="."'"."/images/".$fila['2']."'"."alt=''".">"."</td><td>".$fila['0']."</p></td>";

echo "<td >".$fila['3']."</td>"."<td >".$fila['1']."</td></tr>";
}


?>
</thead>
</tbody>
</table>
</div>




  <h1 class="display-4">
    Notas del alumno
  </h1>

<div class="responsive-table-sm">
 <table class="table table-dark table-hover">
  <thead>
    <tr>

    <th>
    Profesor
    </th>

    <th>
alumno    </th>
        <th>
Lapso
      </th>

                <th>
     Materia
              </th>

                <th>
            Nota
              </th>
  </tr>
 </thead>
 <tbody>

<!--crear la tabla-->
<?php





require("connect_db.php");



$consulta2="SELECT teacher_name,lapso,materia,nota,student_name,id_nota FROM notas  ORDER BY materia ASC";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  echo "<form action='update_nota.php' method='post' accept-charset='utf-8'>";
  echo "<tr><td><input class='form-control' name='teacher_name' id='inputtext' value='".$fila['0']."'/></td><td><input class='form-control' id='inputtext'name='student' value='".$fila['4']."'></td>";
  echo "<td><input class='form-control'  id='inputtext' name='lapso' value='".$fila['1']."'></p></td>";

echo "<td ><input class='form-control'  id='inputtext' name='materia' value='".$fila['2']."'/></td>";
echo "<td ><input class='form-control'  id='inputtext' name='nota' value='".$fila['3']."'/></td>";
echo "<td ><input class='form-control' style='display:none;' id='inputtext' name='id' value='".$fila['5']."'/>";
echo "<input  type='submit' class='btn btn-warning' value='Editar' /></td>";
echo "</form>";
echo "<form action='delete_nota.php' method='post' accept-charset='utf-8'>";
echo "<td ><input class='form-control' style='display:none;' id='inputtext' name='id' value='".$fila['5']."'/>";
echo "<input  type='submit' class='btn btn-danger' value='Eliminar' /></td>";
echo "</form>";


}


?>

</tbody>
</table>
</div>















<!-- php?echo "<img src='/images/"."$user_photo"."' style='max-width:80px; max-height:100px; 'class='rounded'>"?>
 <a class="btn btn-light btn-sm " href="subir.php">cambiar</a>
</td>
<td>

< php echo $user_name;?>
</td>
<td>

< php echo $user_mail;?>
--></tbody>
 </table>
</div>
<!--codigo para mostrar la imagen de usuario-->


<h1 class="icon icon-html-five2">lol</h1>

<!--este es el codigo de un objeto que aparece encima de otro solo si el mouse se coloca encima parecido a una nota-->

      <!--div class="tooltip">
  <span class="tooltiptext">
  </span>
  </div>
  <!- -->




</section>

</div>

</div>



</div>


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
