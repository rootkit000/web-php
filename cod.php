<meta charset="utf-8">
<?php

	$type=$_POST['type'];

	require("connect_db.php");

				mysqli_query($mysqli,"INSERT INTO cod_act (id,status,code,type) VALUES('','1','','$type')");




?>