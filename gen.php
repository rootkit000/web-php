<meta charset="utf-8">


<?php

	$type=$_POST['type'];
	$carrera=$_POST['carrera'];

	require("connect_db.php");

				$getcode=mysqli_query($mysqli,"SELECT MAX(Id) FROM cod_act");
				$getcode2=mysqli_query($mysqli,"SELECT MAX(Id) FROM cod_act");
	$getcode2=mysqli_num_rows($getcode2);

if($getcode2>0){


while($fila=mysqli_fetch_row($getcode))
{
 $lol=$fila['0']+1;

}
	}


if($lol<1 or $lol==1){

  $lol=mt_rand(1,999);

}


				mysqli_query($mysqli,"INSERT INTO cod_act (status,code,type) VALUES('1','$lol','$type')");

require("include/cabecera.php");
require("include/menu.php");

?>

<!--Formulario de inicio de sesion-->
<div id="div" class="clearfix">
<center>
<form method="post" action="gen.php" class="was-validated clearfix">
          <div class="form-group">

<br>



                  <h5 class="text-*-center display-5"> </h5>

   <h5 class="display-5  font-weight-bolder  text-body color-dark float-md-left">CODIGO</h5>

<hr>

   <h1 class="display-5  font-weight-bolder  text-body color-dark float-md-left"><?php  echo $lol  ?></h1>
   <br>
   <b>Registro de :</b>
  <h4 class="display-5  font-weight-bolder  text-body color-dark float-md-left"><?php  if($type==1){ echo "ADMINISTRADOR";} if($type==2){ echo "ESTUDIANTE";} if($type==3){ echo "PROFESOR";}    ?></h4>



</div>
</form>


   <div>