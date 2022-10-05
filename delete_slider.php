<?php

$identificador=$_POST['id_product'];

require("connect_db.php");
$sql="DELETE  FROM slider  WHERE id_slider='$identificador'";
$resultado=mysqli_query($mysqli, $sql);
if($sql){

    echo "<script>location.href='config.php'</script>";    
}
else{
    echo "try again";

    echo "<script>location.href='config.php'</script>";    
}
?>
 