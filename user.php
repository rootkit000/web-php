<ht

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Slider Responsive</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	<script src="jquery1.6.2.min.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
    	touch: true,
    	pauseOnAction: false,
    	pauseOnHover: false,
    });
  });
</script>
</head>

<!--Cabecera de la pagina-->

<header id="header" class="header2" onload="revelar();">

<nav>

<div>

<!--boton de usuario decide que imagen ponerle-->

<img src="logo.png" id="botton_de_usuario"/>



<!--Titulo de la pagina-->
<!--boton de ocultar elemento/el titulo tambien oculta el elemento pero se puede remplazar por un boton/-->

<h1 id="Cabecera" onclick="menu_action();">
"Escuela Tecnica Comercial Santos Michelena"
</h1>



<div>
<a href="index.php">
 <span id="upload_icon" class="icon icon-upload"></span></a>
</div>

</nav>

</header>

<!--estos saltos de linea son necesarios dejalos mientras quieras que el sitio tenga un cabecera persistente para que no tape nada del contenido-->
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<!---->






</script>
<body>


<body>


	<!--slider con javascript-->

	<div class="flexslider">
		<ul class="slides">
			<li>
				<img src="imagenes/web_banner.png" alt="">
				<section class="flex-caption">
					<div id="div_slider">

							<p><span id="slider_header">HTML 5<img id="slider_icon" src="imagenes/html5.png"></span><br><br>-Aprende el lenguaje de marcado y etiquetado HTML en su version numero 5 , con este podras definir el cuerpo de una pagina web</p>

	</div>
				</section>
			</li>
			<li>
				<img src="imagenes/banner.png" alt="">
				<section class="flex-caption">
					<p><span id="slider_header">CSS 3<img id="slider_icon" src="imagenes/css3.png"></span><br><br>-Aprende el lenguage de hojas de estilo en cascada con este lenguaje podras darl estilos impresionantes a tus paginas webs 5</p>

				</section>
			</li>
		</ul>
	</div>

	<h1>HTML 5</h1>
	<p>-html version 5 es un lenguaje de etiquetado y marcado de hyper texto, bien mas facil de explicar seria que no es un lenguaje de progracion solo sirve para definir nuestra pagina web</p>
</body>
</html>
s
</body>
</html>
