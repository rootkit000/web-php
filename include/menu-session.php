


    if($_SESSION['rol']==2)
   {
       echo "<li><a class='dropdown-item' href='profile.php'>".$_SESSION['user']."</a></li>";
      echo '<li><a class="dropdown-item"  href="desconectar.php">Cerrar sesion <span class="icon icon-switch"></span> </a></li>';


echo '<li><a class="dropdown-item" href="config.php">Configuracion</a></li>';

       echo '<li> <a class="dropdown-item"  href="info.php">item </a></li>
       <li><a class="dropdown-item"  href="productos.php">item 2</a></li>';
   }

   
   if($_SESSION['rol']==1){
  echo "<li><a class='dropdown-item' href='profile.php'>".$_SESSION['user']."</a></li>";
      echo '<li><a class="dropdown-item"  href="desconectar.php">Cerrar sesion <span class="icon icon-switch"></span> </a></li>';


echo '<li><a class="dropdown-item" href="config.php">Configuracion</a></li>';

       echo '<li> <a class="dropdown-item"  href="teachers.php">Profesores </a></li>
       <li><a class="dropdown-item"  href="gencod.php">Cod registro</a></li>';



   }