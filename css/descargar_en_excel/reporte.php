<?php

include('conexion.php');//CONEXION A LA BD

$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];

if(isset($_POST['generar_reporte']))
{
	// NOMBRE DEL ARCHIVO Y CHARSET
	header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="Reporte_Fechas_Ingreso.csv"');

	// SALIDA DEL ARCHIVO
	$salida=fopen('php://output', 'w');
	// ENCABEZADOS
	fputcsv($salida, array('Nombres', 'apellidos', 'Año', 'Mencion', 'Seccion','cedula', 'Ingesta'));
	// QUERY PARA CREAR EL REPORTE



	$reporteCsv=$conexion->query("SELECT *  FROM alumnos ");
	while($filaR= $reporteCsv->fetch_assoc())
		fputcsv($salida, array($filaR['nombres'], 
								$filaR['apellidos'],
								$filaR['year'],
								$filaR['mencion'],
								$filaR['seccion'],
								$filaR['cedula'],
								$filaR['ingesta']


)
);


								if($filaR['ingesta']!='lo'){echo '$lol';}


echo array($comio);
// aqui ira el total de los que comieron o no comerion

}

?>
