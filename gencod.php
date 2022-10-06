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
  include("include/cabecera.php");



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





<!--Formulario de inicio de sesion-->
<div id="div" class="clearfix">
<center>
<form method="post" action="gen.php" class="was-validated clearfix">
          <div class="form-group">

<br>



                  <h5 class="text-*-center display-5"> </h5>

   <h5 class="display-5  font-weight-bolder  text-body color-dark float-md-left">GENERAR CODIGO</h5>
<hr>
   <br>

   <b>Nivel de privilegios</b>


<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect02">Tipo de cuenta</label>
<select name="type" id="cod" class="form-select"  id="inputGroupSelect02">
  <?php  if($_SESSION['rol']==1){ echo '<option value="1">Administrador</option>';}?>
  <option value="3">Profesor</option>
  <option value="2">Estudiante</option>
</select>
</div>
   <br>





<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Carrera</label>
  <select name="carrera" class="form-select" id="inputGroupSelect01">
  <option value="0">Ninguna</option>
<?php


        $codeprivileges=mysqli_query($mysqli,"SELECT id, carrera, coste_incrip ,  coste_semes FROM carrera ");


while($fila=mysqli_fetch_row($codeprivileges))
{


   echo '<option value="'.$fila[0].'">'.$fila[1].'</option>';


}



?>
  </select>
</div>

<ul>
    <li>Adminstrador</li>
    <p>
      como administrador tienes control del sistema NO DEBE DAR CODIGOS DE ADMINISTRADOR A DIESTRA Y SINIESTRA.
    </p>
    <li>PROFESOR</li>
    <p>
     Como profesor puedes generar codigos para estudiantes, subir horarios y revisar notas.
    </p>
    <li>ESTUDIANTE</li>
    <p>como estudiante puedes consultar las notas y horarios.</p>
</ul>

   <input  class="btn btn-dark float-md-right" type="submit" name="submit" value="GENERAR"/>

</div>
</form>


   <div>

<?php
    if(isset($_POST['submit'])){
      require("gen.php");
    }
   ?>



</div>
</div>



<!-- Pie de pagina-->

<footer id="footer">
<center>
&copy;<?php echo $titulo."</h1>"; ?>
<?php echo $footer; ?> 

</footer>
<!-- /container -->
  <script src="demo-files/liga.js"></script>
  <script src="demo-files/demo.js"></script>

  </body>
</html>
