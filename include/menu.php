
<?php
/*comprobamos que haya sesession y si no pa fuera mi loco*/
if (@!$_SESSION['user']){echo "href='index2.php'";}else{echo "href='profile.php'";}
?>




<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbarra" >

<div class="container-fluid">
  <a class="navbar-brand" href="index.php">
<img height="50vh" src="/logo/<?php echo $app_img;?>"/>
</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">


<?php


        if (@!$_SESSION['user'])
   {
echo "<li><a class='dropdown-item' href='index2.php'>Iniciar sesion</a></li>";

echo '<li ><a class="dropdown-item" href="inscribirse.php">Incribirse</a></li><li><a class="dropdown-item"  href="desconectar.php"Cerrar sesion <span class="icon icon-switch"></span> </a></li>';
   }

if ($_SESSION)
   {



      if($_SESSION['rol']==2)
   {
       echo "<li><a class='dropdown-item' href='profile.php'>".$_SESSION['user']."</a></li>";
      echo '<li><a class="dropdown-item"  href="desconectar.php">Cerrar sesion <span class="icon icon-switch"></span> </a></li>';


echo '<li><a class="dropdown-item" href="config.php">Configuracion</a></li>';

       echo '<li> <a class="dropdown-item"  href="calendar.php">horario</a></li>
       <li><a class="dropdown-item"  href="classes.php">materias y notas</a></li>';
   }


   if($_SESSION['rol']==1){
  echo "<li><a class='dropdown-item' href='profile.php'>".$_SESSION['user']."</a></li>";
      echo '<li><a class="dropdown-item"  href="desconectar.php">Cerrar sesion <span class="icon icon-switch"></span> </a></li>';


echo '<li><a class="dropdown-item" href="config.php">Configuracion</a></li>
<li> <a class="dropdown-item"  href="teachers.php">Profesores </a></li>
<li> <a class="dropdown-item"  href="teachers.php">Profesores </a></li>

<li> <a class="dropdown-item"  href="gencod.php">Cod registro</a></li>';



   }

   }

      ?>





          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>














<?php
echo "<style>

#navbarra{
  background-color:".$color.";
}

</style>
";
?>
<style>
#tabla_resultado
{
color: black;
background-color: white;
display: none;
position: fixed;
transition: 0.5s;
}
#text_slider{
  font-family: verdana;
color:white;
background:rgba(0, 0, 0, 0.2);
padding:13vh;
font-size:2vh;
transition: 0.8s;
}
#text_slider:hover{
  font-family: verdana;
color:white;
background:rgba(0, 0, 0, 0.7);
padding:13vh;
font-size:2vh;
transition:0.8s;
}
#header_flex{
font-size: 4vh;
}
</style>
</head>
<body style="background-color: darkgrey;">

</ul>

</nav>


