<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Chivis</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="stylesheet" type="text/css" href="galeria.css">
  <link rel="stylesheet" type="text/css" href="presentacion.css">
  <link href="styles.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="fotogaleria.css">
		<script type="text/javascript" src="animado.js"></script>
		
		
		
</head>

<body>
<!--fotogaleria -->
<center><img src="img/logo.png"></center>
<!--menu-->
<div id="menu">
	<ul width="100%" style="display: block ">
		<li><a href=#descripcion>Quien soy</a></li>
		<li><a href=#portafolio>Portafolio</a></li>
		<li><a href=#equipo>Equipo</a></li>
		<li><a href=#contacto>Contacto</a></li>
	</ul>	
</div>


<div id="inicio" >
		<div class="contenedor">
			<div class="imagen actual">
				<img src="imagenes/img1.jpg" />
			</div>
			
			<div class="imagen">
				<img src="imagenes/img2.jpg" />
			</div>
			
			<div class="imagen">
				<img src="imagenes/img3.jpg" />
			</div>
			
			<div class="imagen">
				<img src="imagenes/img4.jpg" />
			</div>
		</div>
</div><br>
<!--fin fotogaleria-->
<!--descripcion-->
<div class="contmedio" > 
	<div id="presentacion">
		<img src="img/portada.jpg"  id="imgpres">
	</div>
	
	<div  id="descripcion" >
	<div id="quien" title="nada">
		<center><p id="titulo">7 AHAW Luz Pintada, Chivis Cortés<br></p></center>
		<p id="contenido">
		Tenemos experiencias en varias ramas de la fotografía, como bodas, bautizos, primera comunión, xv años, graduaciones, fiestas infantiles,
		al igual que conciertos musicales y foto publicitaria trabajando con empresas que avalan nuestro trabajo.
		<br><br>		
		Con nuevos proyectos queremos sorprendernos y sorprenderte, uno de ellos ha sido la oportunidad de documentar el nacimiento, dar a luz, 
		fue una experiencia tan gratificante, poder estar en el nacimiento de una vida, fotografiandola, 
		capturando ese sol que llega alumbrar vidas y corazones.<br>
		
		
		</p>
	</div>
	</div>
	
</div>
<!--fin descripcion-->
<!--galeria-->
 <div  class="contmedio" id="portafolio"> 
   <div id="img" style="background-image: url(img/bodas/portada.jpg);float:left;">
		<div id="info">
			<p id="headline">Bodas</p>
		</div>
   </div>
   <div id="img" style="background-image: url(img/estudio/portada.jpg);float:left">
		<div id="info">
			<p id="headline">estudio</p>
		</div>
   </div>
   <div id="img" style="background-image: url(img/eventos/portada.jpg); float:left">
		<div id="info">
			<p id="headline">eventos</p>
		</div>
   </div>
   <div id="img" style="background-image: url(img/parejas/portada.jpg);float:left">
		<div id="info">
			<p id="headline">parejas</p>
		</div>
   </div>
   <div id="img" style="background-image: url(img/embarazo/portada.jpg);float:left">
		<div id="info">
			<p id="headline">embarazo</p>
		</div>
   </div>
   <div id="img" style="background-image: url(img/arqueologia/portada.jpg); float:left">
		<div id="info">
			<p id="headline">arqueologia</p>
		</div>
   </div>

</div>  
<!--fin galeria-->
<!--equipo -->
	<div class="contmedio" style="clear:both;float:left;" id="equipo">
		<center><p id="titulo">Conoce al equipo</p></center>
		<div class="picture left" style="width:220px;"> 
				<img src="img/perfil1.jpg" alt="Planeta Marte" width="210" height="210" /> <br />
			<p id="descimag">Etz Siete Ahaw <br>fotografía y diseño</p>
		</div>
		<div class="picture right" style="width:220px;"> 
			<img src="img/perfil2.jpg" alt="Planeta Marte" width="210" height="210" /> <br />
			<p id="descimag">Sylvia A. Cortés B<br>Servicio al cliente y Ventas</p>
		</div>
	</div>
<!--fin equipo-->
<!--contacto-->
<div class="contgrande"  id="contacto">

<div class="contmitad"style="float:left;">



	<form action="envia.php" method="post" class="form-consulta"> 
		<label>Nombre : <span>*</span>
			<input type="text" name="nombre" placeholder="Nombre y apellido" class="campo-form" required>
		</label>
		
		<label>Email: <span>*</span>
			<input type="email" name="email" placeholder="Email" class="campo-form" required>
		</label>
		
		<label>Asunto: 
			<input type="asunto" name="asunto" placeholder="Asunto" class="campo-form">
		</label>
		
		<label>Consulta:
			<textarea name="consulta" class="campo-form"></textarea>
		</label>

		<input type="submit" value="Enviar" class="btn-form">
	</form>

<!-- formulario -->



</div>
<div class="contmitad"style="float:right;">
<img src="img/contacto.jpg" width="100%" height="100%">
</div>
<div style="height:50px;clear:both;">
<center>


<img src="https://counter11.whocame.ovh/private/contadorvisitasgratis.php?c=42l7nx9n9pmzm834zl2uun7xqkczla7y" border="0" title="contadores visitas gratis" alt="contadores visitas gratis">
</center>
</div>
</div>

<!--fin contacto-->
<div id="menu" style="clear:both;">
	<ul width="100%" style="display: block ">
		<li><a href=#descripcion>Quien soy</a></li>
		<li><a href=#portafolio>Portafolio</a></li>
		<li><a href=#equipo>Equipo</a></li>
		<li><a href=#contacto>Contacto</a></li>
	</ul>	
</div>


</body>
</html>