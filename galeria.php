<?php


require("connect_db.php");



$consulta2="SELECT header,content,active,active_slider FROM config WHERE id='1'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{


$header=$fila['0'];
$content=$fila['1'];
$active=$fila['2'];
$active_slider=$fila['3'];

}


?>



<?php if($active=='on'
){
  echo "<div class='container-xxl bg-light  p-5'>";
  echo "<h1>".$header."</h1>";
echo "<p>".$content."</p></div>";
}
?>




<?php if($active_slider=='on'){echo '
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>

    </div>

';}                        ?>
 <?php

require("connect_db.php");


if($active_slider=='on'){
$consulta2="SELECT title,description,price,img FROM slider";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{

  echo"<div class='carousel-item'>";
  echo "<img src='/images/".$fila['3']."' alt='".$fila['3']."'  class='d-block w-100' >";
  echo "<div class='carousel-caption d-none d-md-block'>";
  echo "<h5>".$fila['0']."</h5>".$fila['1'].""."<p>".$fila['2']."</p>";
  echo "</div>";
  echo "</div>";
 /*elementos del slider*/



}


echo "</div>";
}?>


<?php if($active_slider=='on') {echo '


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
';
}?>




