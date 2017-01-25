<!DOCTYPE html>
<html lang="es">

<head>
    <title>Elena ETC - Consultoría Administrativa Especializada</title>

    <script type="text/javascript">var menu_nbr = 5;</script>

    <?php include('includes/head.html'); ?>
</head>

<body class="contacto">
	<?php include('includes/header.html'); ?>

	<div class="container cuerpo">
		<div class="row titulo">
			<div class="col-sm-6 contacto-izq">
				<div class="text-center">
					<h2 class="mays champan-bold">Contacto</h2>
				</div>
				<div class="hidden-xs">
					<img src="img/llamada.png" class="img-responsive" />
				</div>
			</div>
			<div class="col-sm-6 contacto-der">
				<form id="fomulario-contacto">
					<div class="row linea-formulario-contacto">
						<div class="col-xs-12 col-sm-3 formulario-contacto-etiqueta">
							<label for="nombre" class="naranja helvetica">Nombre:</label>
						</div>
						<div class="col-xs-12 col-sm-9 formulario-contacto-campo">
							<input type="text" name="nombre" id="nombre" />
						</div>
					</div>
					<div class="row linea-formulario-contacto">
						<div class="col-xs-12 col-sm-3 formulario-contacto-etiqueta">
							<label for="nombre" class="naranja helvetica">Email:</label>
						</div>
						<div class="col-xs-12 col-sm-9 formulario-contacto-campo">
							<input type="text" name="email" id="email" />
						</div>
					</div>
					<div class="row linea-formulario-contacto">
						<div class="col-xs-12 col-sm-3 formulario-contacto-etiqueta">
							<label for="nombre" class="naranja helvetica">Asunto:</label>
						</div>
						<div class="col-xs-12 col-sm-9 formulario-contacto-campo">
							<input type="text" name="asunto" id="asunto" />
						</div>
					</div>
					<div class="row linea-formulario-contacto">
						<div class="col-xs-12 col-sm-3 formulario-contacto-etiqueta">
							<label for="nombre" class="naranja helvetica">Mensaje:</label>
						</div>
						<div class="col-xs-12 col-sm-9 formulario-contacto-campo">
							<textarea name="mensaje" id="mensaje"></textarea>
						</div>
					</div>
					<div class="row linea-formulario-contacto">
						<div class="col-sm-offset-3 col-sm-9 formulario-contacto-campo formulario-contacto-enviar">
							<input type="submit" name="enviar" id="enviar" value="Enviar" class="boton" />
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include('includes/footer.html'); ?>
</body>
</html>