function validaSolicitud(){
	var errores = "";
	
	var nombre = $('#nombre').val();
	var apellidos = $('#apellidos').val();
	var telefono = $('#telefono').val();
	var email = $('#email').val();


	if(!validarNombre(nombre))
		errores += "<li>Debe introducir su nombre</li>";

	if(!validarNombre(apellidos))
		errores += "<li>Debe introducir sus apellidos</li>";

	if(!validarNombre(telefono) && !validarNombre(email))
		errores += "<li>Debe introducir al menos un teléfono o un correo electrónico</li>";
	else{
		if(validarNombre(telefono) && !validarTelefono(telefono))
			errores += "<li>Debe introducir un teléfono correcto</li>";
		else
			if(validarNombre(email) && !validarEmail(email))
				errores += "<li>Debe introducir un email correcto</li>";
	}

	if(!(validarCheckbox('#check-vivienda') || validarCheckbox('#check-local') || validarCheckbox('#check-promocion') || validarCheckbox('#check-suelo') || validarCheckbox('#check-otros')))
		errores += "<li>Debe seleccionar, al menos, un tipo de activo</li>";

	if(!(validarCheckbox('#check-licencias') || validarCheckbox('#check-representacion') || validarCheckbox('#check-expedientes') || validarCheckbox('#check-tramitacion') || validarCheckbox('#check-gestion') || validarCheckbox('#check-otra-gestion') || validarCheckbox('#check-facility')))
		errores += "<li>Debe seleccionar, al menos, una opción del apartado qué necesita de ETC</li>";

	return errores;
}

function muestraErroresSolicitud(errores){
	errores = "<p>Hay errores en el formulario:</p><ul>" + errores + "</ul>";
	$('#errores-solicitud').html(errores);
	$('#errores-solicitud').show();
	scrollTo('#errores-solicitud');
}

function enviaSolicitud(){
	var to = "elena@elenaetc.es";
	// var to = "fvargasestrada@gmail.com";
	var subject = "Solicitud de información desde elenaetc.es";
	var message = "Nombre: " + $('#nombre').val() + "\n";
	var message = message + "Apellidos: " + $('#apellidos').val() + "\n";
	var message = message + "Empresa: " + $('#empresa').val() + "\n";
	var message = message + "Dirección: " + $('#direccion').val() + "\n";
	var message = message + "Localidad: " + $('#localidad').val() + "\n";
	var message = message + "Teléfono: " + $('#telefono').val() + "\n";
	var message = message + "Email: " + $('#email').val() + "\n";
	var message = message + "\nTIPO DE ACTIVO:\n\n";

	if(validarCheckbox('#check-vivienda')){
		var message = message + "-Vivenda";
		if($('#vivienda').val().length > 0)
			var message = message + ": " + $('#vivienda').val() + "\n";
		else
			var message = message + "\n";
	}

	if(validarCheckbox('#check-local')){
		var message = message + "-Local comercial";
		if($('#local').val().length > 0)
			var message = message + ": " + $('#local').val() + "\n";
		else
			var message = message + "\n";
	}

	if(validarCheckbox('#check-promocion')){
		var message = message + "-Promoción comercial";
		if($('#promocion').val().length > 0)
			var message = message + ": " + $('#promocion').val() + "\n";
		else
			var message = message + "\n";
	}

	if(validarCheckbox('#check-suelo')){
		var message = message + "-Suelo";
		if($('#suelo').val().length > 0)
			var message = message + ": " + $('#suelo').val() + "\n";
		else
			var message = message + "\n";
	}

	if(validarCheckbox('#check-otros')){
		var message = message + "-Otros";
		if($('#otros').val().length > 0)
			var message = message + ": " + $('#otros').val() + "\n";
		else
			var message = message + "\n";
	}

	var message = message + "\nQUÉ NECESITA DE ETC:\n\n";

	if(validarCheckbox('#check-licencias'))
		var message = message + "-Gestion de licencias, permisos, altas catastrales, tributos\n";

	if(validarCheckbox('#check-representacion'))
		var message = message + "-Gestión de representación ante organismos publicos y/o privados\n";

	if(validarCheckbox('#check-expedientes'))
		var message = message + "-Expedientes VPO\n";

	if(validarCheckbox('#check-tramitacion'))
		var message = message + "-Tramitación subvenciones / rehabilitación\n";

	if(validarCheckbox('#check-gestion'))
		var message = message + "-Gestión comercial de activos inmobiliarios\n";

	if(validarCheckbox('#check-otra-gestion'))
		var message = message + "-Otro tipo de gestión\n";

	if(validarCheckbox('#check-facility'))
		var message = message + "-Facility management\n";

	if($('#comentarios').val().length > 0)
		var message = message + "\nCOMENTARIOS\n\n" + $('#comentarios').val() + "\n";

	$.post(
		"send-mail.php",
		{to: to, subject: subject, message: message},
		function(data){
			if (data === "enviado"){
				alert('Muchas gracias. Su solicitud ha sido enviada');
			}

			else{
				alert('Su solicitud no se ha podido enviar. Pruebe de nuevo pasados unos minutos');
			}
		}
	);
}

$(function(){
	$('#formulario-encargo').submit(function(event) {
		event.preventDefault();

		$('#errores-solicitud').hide();
		var errores = validaSolicitud();

		if(errores.length < 1){
			enviaSolicitud();
		}
		else{
			muestraErroresSolicitud(errores);
		}
	});
});