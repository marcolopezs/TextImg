<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="estilos.css">

	<!-- TIPOS DE LETRA -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700' rel='stylesheet' type='text/css'>

	<!-- JQUERY Y JQUERY UI -->
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
	<script src="app.js"></script>

	<!-- SPECTRUM - COLORPICKER -->
	<link rel="stylesheet" href="http://bgrins.github.io/spectrum/spectrum.css">
	<script src="http://bgrins.github.io/spectrum/spectrum.js"></script>
</head>
<body>

	<section>
		
		<div id="imagen">

			<img class="imagenInput" src="" alt="">

			<p class="textoInput"></p>
			
		</div>

		<a id="enviarimagen" href="javascript:;">Enviar imagen</a>

		<div id="imagen-select">
			<ul>
				<li><a class="1" href="javascript:;"><img id="imagen1.jpg" src="fondo/thumb/imagen1.jpg" alt=""></a></li>
				<li><a class="2" href="javascript:;"><img id="imagen2.jpg" src="fondo/thumb/imagen2.jpg" alt=""></a></li>
			</ul>
		</div>

		<div id="imagen-texto">
			
			<fieldset>
				Texto: <input id="texto" type="text" value="" />
			</fieldset>

			<fieldset>
				<a class="aumFuente" href="#">Aumentar</a>
				<a class="disFuente" href="#">Disminuir</a>
				<a class="reiFuente" href="#">Reiniciar</a>
  			</fieldset>	

  			<fieldset>
  				Color: <input type="text" name="colorpicker4" id="colorpicker4" class="gui-input" />
  			</fieldset>

  			<fieldset>
  				Tipo de letra:

  				<fieldset style="float: left;">
  					<p>Open Sans</p>
  					<ul id="textoOS" class="tipoTexto">
  						<li class="Open-Sans-normal-300"><a id="Open-Sans-normal-300" href="javascript:;"></a></li>
  						<li class="Open-Sans-italic-300"><a id="Open-Sans-italic-300" href="javascript:;"></a></li>
  						<li class="Open-Sans-normal-400"><a id="Open-Sans-normal-400" href="javascript:;"></a></li>
  						<li class="Open-Sans-italic-400"><a id="Open-Sans-italic-400" href="javascript:;"></a></li>
  						<li class="Open-Sans-normal-600"><a id="Open-Sans-normal-600" href="javascript:;"></a></li>
  						<li class="Open-Sans-italic-600"><a id="Open-Sans-italic-600" href="javascript:;"></a></li>
  						<li class="Open-Sans-normal-700"><a id="Open-Sans-normal-700" href="javascript:;"></a></li>
  						<li class="Open-Sans-italic-700"><a id="Open-Sans-italic-700" href="javascript:;"></a></li>
  						<li class="Open-Sans-normal-800"><a id="Open-Sans-normal-800" href="javascript:;"></a></li>
  						<li class="Open-Sans-italic-800"><a id="Open-Sans-italic-800" href="javascript:;"></a></li>
  					</ul>
  				</fieldset>
  				
  				<fieldset style="float: left;">
  					<p>Yanone</p>
  					<ul id="textoYANONE" class="tipoTexto">
  						<li class="Yanone-Kaffeesatz-normal-200"><a id="Yanone-Kaffeesatz-normal-200" href="javascript:;"></a></li>
  						<li class="Yanone-Kaffeesatz-normal-300"><a id="Yanone-Kaffeesatz-normal-300" href="javascript:;"></a></li>
  						<li class="Yanone-Kaffeesatz-normal-400"><a id="Yanone-Kaffeesatz-normal-400" href="javascript:;"></a></li>
  						<li class="Yanone-Kaffeesatz-normal-700"><a id="Yanone-Kaffeesatz-normal-700" href="javascript:;"></a></li>
  					</ul>
  				</fieldset>
  			</fieldset>


		</div>

	</section>
	
</body>
</html>	