<?php
///// INCLUIR LA CONEXIÓN A LA BD /////////////////
include('conexion.php');
///// CONSULTA A LA BASE DE DATOS /////////////////
$alumnos="SELECT * FROM alumnos limit 5;";
$resAlumnos=$conexion->query($alumnos);
?>

<html lang="es">
	<head>
		<title>Descargar Reportes en Excel desde la BD</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h2>Descargar Reportes en Excel desde la BD</h2>
			</div>
		</header>
		<section>
			<table class="table">
				<tr class="bg-primary">
					<th>nombres</th>
					<th>apellidos</th>
					<th>año</th>
					<th>mencion</th>
					<th>seccion</th>
					<th>cedula</th>
					<th>ingesta</th>
				</tr>
				<?php
				while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
				{
					echo'<tr>
						 <td>'.$registroAlumnos['nombres'].'</td>
						 <td>'.$registroAlumnos['apellidos'].'</td>
						 <td>'.$registroAlumnos['year'].'</td>
						 <td>'.$registroAlumnos['mencion'].'</td>
						 <td>'.$registroAlumnos['seccion'].'</td>
						 <td>'.$registroAlumnos['cedula'].'</td>
						 <td>'.$registroAlumnos['ingesta'].'</td>
						 </tr>';
$nocomio=0;

if($registroAlumnos['ingesta'] == 'no ha ingerido'){while($nocomio<array($registroAlumnos['ingesta'])){ ++$nocomio; echo $nocomio;}}				
}
				?>
			</table>
		</section>

		<form method="post" class="form" action="reporte.php">
		<input type="date" name="fecha1">
		<input type="date" name="fecha2">
		<input type="submit" name="generar_reporte">
		</form>
	</body>
</html>


