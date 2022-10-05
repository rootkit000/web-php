


<?php
//este archivo es solo para incluirlo en las paginas donde deseas que los administradores sean los unicos que tengan acceso
//con include() o require()


  if (@!$_SESSION['user'])
   {
   echo "<script>alert(' No eres admin ');</script>";

       echo "<script> window.location='index.php'</script>";

   }
   if ($_SESSION['rol']!=1)
   {


       echo "<script>alert(' No eres admin ');</script>";

       echo "<script> window.location='index.php'</script>";

   }
?>