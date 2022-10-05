
<meta charset="utf-8">
<?php

	$teacher_id=$_POST['teacher_id'];
	$student_id=$_POST['student_id'];
	$materia=$_POST['materia'];
    $lapso=$_POST['lapso'];
    $nota=$_POST['nota'];

	require("connect_db.php");



	$obtenerAlumno="SELECT name,lastname FROM alumnos where id_alumno='$student_id' ";

	$variableAlumno=mysqli_query($mysqli,$obtenerAlumno);
	
	while($Alumno=mysqli_fetch_row($variableAlumno))
	{
	$student_name=$Alumno['0'];
	$student_lastName=$Alumno['1'];
    $student_complete=$student_name." ".$student_lastName;	
}

	$obtenerprofesor="SELECT name,lastname FROM teachers where id='$teacher_id' ";

	$variableprofesor=mysqli_query($mysqli,$obtenerprofesor);
	
	while($profesor=mysqli_fetch_row($variableprofesor))
	{
	$teacher_name=$profesor['0'];
	$teacher_lastName=$profesor['1'];
    $teacher_complete=$teacher_name." ".$teacher_lastName;	
}

	//realizar la consulta


		//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		
	require("connect_db.php");

		$sql2=mysqli_query($mysqli,"SELECT materia,id_alumno,lapso FROM notas  WHERE materia='$materia' AND lapso='$lapso' AND id_alumno='$student_id'");
		if($f2=mysqli_fetch_assoc($sql2)){
			if($materia==$f2['materia']&&$student_id==$f2['id_alumno']&&$lapso==$f2['lapso']){
				echo '<script>alert("este alumno ya tiene nota para este lapso en esta materia");
				window.location="subir_nota.php";</script> ';
	
			
			
			}else{
				mysqli_query($mysqli,"INSERT INTO notas VALUES('','$student_id','$teacher_id','$teacher_complete','$student_complete','$lapso','$materia','$nota')");
				echo '<script>alert("nota subida con exito!");
				window.location="subir_nota.php";</script> ';
	}}else{
		mysqli_query($mysqli,"INSERT INTO notas VALUES('','$student_id','$teacher_id','$teacher_complete','$student_complete','$lapso','$materia','$nota')");
		echo '<script>alert("nota subida con exito!");
		window.location="subir_nota.php";</script> ';

			}

?>



















