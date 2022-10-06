<meta charset="utf-8">
<script src="js/push.min.js" type="text/javascript"></script>
<?php

	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$rcode=$_POST['rcode'];
	$ci=$_POST['ci'];

	require("connect_db.php");
$create_table=mysqli_query($mysqli,'CREATE TABLE "$mail" ');
;
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">window.alert("Este Correo electronico ya esta registrado prueba otro");
				window.focus();	
                window.location="registrar.php";

				</script> ';

			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");


				$codeprivileges=mysqli_query($mysqli,"SELECT type,carrera FROM cod_act WHERE code='$rcode'  AND status='1' ");


while($fila=mysqli_fetch_row($codeprivileges))
{
  $privileges=$fila['0'];
  $carrera_inscrip=$fila['1'];


}


				$checkcode=mysqli_query($mysqli,"SELECT 'code' FROM cod_act WHERE code='$rcode'  AND status='1' ");

				$checkcode=mysqli_num_rows($checkcode);


				$checkDni=mysqli_query($mysqli,"SELECT 'cedula' FROM login WHERE cedula='$ci' ");
				$checkDni=mysqli_num_rows($checkDni);



				if($checkDni<1){}else{
					echo "<script>window.alert('Comprueba Tu numero de cedula ".$ci."'); window.location='registrar.php';</script>";

				}





				if($checkcode>0){
						echo $rcode;

				mysqli_query($mysqli,"UPDATE cod_act SET status = '2' WHERE code = '$rcode' AND status='1' ");

				mysqli_query($mysqli,"INSERT INTO login (email,passadmin,user,rol,password,img,lastname,cedula,carrera) VALUES('$mail','','$mail','$privileges','$pass','user2.png','nick','$ci','$carrera_inscrip')");

				//echo 'Se ha registrado con exito';
						echo "<script>window.alert('Usuario Creado exitosamente'); window.location='index2.php';</script>";
				}

else{
/*si el codigo esta usado  o no esta bn*/
echo "<script>window.alert('Comprueba el codigo ".$rcode."'); window.location='registrar.php';</script>";}

}
			
		}else{
		echo ' <script>window.alert("Las contraseñas no coinciden vuelve a intentarlo");
				window.focus();	
                window.location="registrar.php";</script> ';

		}

	
?>