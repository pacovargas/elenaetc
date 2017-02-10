<!DOCTYPE html>
<html lang="es">

<head>
    <title>Elena ETC - Consultoría Administrativa Especializada</title>

    <script type="text/javascript">var menu_nbr = 0;</script>

    <?php include('includes/head.html'); ?>
</head>

<body class="encargo">
	<?php include('includes/header.html'); ?>

	<div class="container cuerpo">
		<div class="row">
			<div class="col-xs-12 errores" id="errores-solicitud">
				
			</div>
		</div>

		<div class="row">
			<form id="formulario-encargo">
				<div class="col-xs-12 mays champan">
					<h2 class="naranja mays champan-bold">Solicitante</h2>

					<div>
						<span class="nombre-campo">Nombre</span><input type="text" name="nombre" id="nombre" />
						<span class="nombre-campo">Apellidos</span><input type="text" name="apellidos" id="apellidos" />
						<span class="nombre-campo">Empresa</span><input type="text" name="empresa" id="empresa" />
						<span class="nombre-campo">Dirección</span><input type="text" name="direccion" id="direccion" />
						<span class="nombre-campo">Localidad</span><input type="text" name="localidad" id="localidad" />
						<span class="nombre-campo">Teléfono</span><input type="text" name="telefono" id="telefono" />
						<span class="nombre-campo">Correo Electrónico</span><input type="text" name="email" id="email" />
					</div>

					<h2 class="naranja mays champan-bold">Tipo de activo <span class="negro minus champan-bold aclaracion">(marque el tipo de activo y si lo desea una breve descrpción u otra información que considere importante)</span></h2>

					<div>
						<input type="checkbox" name="check-vivienda" id="check-vivienda" />
						<span class="nombre-campo">Vivienda</span>
						<input type="text" name="vivienda" id="vivienda" />
					</div>
					<div>
						<input type="checkbox" name="check-local" id="check-local" />
						<span class="nombre-campo">Local comercial</span>
						<input type="text" name="local" id="local" />
					</div>
					<div>
						<input type="checkbox" name="check-promocion" id="check-promocion" />
						<span class="nombre-campo">Promoción</span>
						<input type="text" name="promocion" id="promocion" />
					</div>
					<div>
						<input type="checkbox" name="check-suelo" id="check-suelo" />
						<span class="nombre-campo">Suelo</span>
						<input type="text" name="suelo" id="suelo" />
					</div>
					<div>
						<input type="checkbox" name="check-otros" id="check-otros" />
						<span class="nombre-campo">Otros</span>
						<input type="text" name="otros" id="otros" />
					</div>

					<div class="row">
						<div class="col-md-7">
							<h2 class="naranja mays champan-bold">Qué necesita de etc <span class="negro minus champan-bold aclaracion">(marque el tipo de gestión que necesita)</span></h2>

							<div>
								<input type="checkbox" name="check-licencias" id="check-licencias" />
								<span class="nombre-campo">Gestion de licencias, permisos, altas catastrales, tributos.</span>
							</div>
							<div>
								<input type="checkbox" name="check-representacion" id="check-representacion" />
								<span class="nombre-campo">Gestión de representación ante organismos publicos y/o privados.<span class="minus entre-parentesis">(Ayuntamientos, Junta de Andalucía, Notaría, etc...)</span></span>
							</div>
							<div>
								<input type="checkbox" name="check-expedientes" id="check-expedientes" />
								<span class="nombre-campo">Expedientes VPO.</span>
							</div>
							<div>
								<input type="checkbox" name="check-tramitacion" id="check-tramitacion" />
								<span class="nombre-campo">Tramitación subvenciones / rehabilitación</span>
							</div>
							<div>
								<input type="checkbox" name="check-gestion" id="check-gestion" />
								<span class="nombre-campo">Gestión comercial de activos inmobiliarios.</span>
							</div>
							<div>
								<input type="checkbox" name="check-otra-gestion" id="check-otra-gestion" />
								<span class="nombre-campo">Otro tipo de gestión.</span>
							</div>
							<div>
								<input type="checkbox" name="check-facility" id="check-facility" />
								<span class="nombre-campo">Facility management.</span>
							</div>
						</div>

						<div class="col-md-5">
							<h2 class="naranja mays champan-bold">Comentarios</h2>
							<textarea name="comentarios" id="comentarios"></textarea>
							<div class="text-right capa-boton"><input type="submit" name="enviar" id="enviar" value="Enviar" class="boton" /></div>
						</div>
					</div>

				</div>
			</form>
		</div>
	</div>

	<?php include('includes/footer.html'); ?>
</body>
</html>