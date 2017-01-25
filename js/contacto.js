var errores = "";

function validaFormularioContacto(){
	var valido = true;
	var email = $('#email').val();

	if(email === ""){
		valido = false;
		errores = errores + "Debe introducir un email correcto\n";
	}
	else{
		if(!validarEmail(email)){
			valido = false;
			errores = errores + "Debe introducir un email correcto\n";		
		}
	}

	return valido;
}

$(function(){
	$('#fomulario-contacto').submit(function(event) {
		event.preventDefault();
		
		if(!validaFormularioContacto()){
			alert(errores);
			errores = "";
		}
		else{
			var to = "elena@elenaetc.es";
			var subject = "Mensaje desde formulario de contacto de elenaetc.es";
			var message = "Nombre: " + $('#nombre').val() + "\n";
			var message = message + "Email: " + $('#email').val() + "\n";
			var message = message + "Asunto: " + $('#asunto').val() + "\n";
			var message = message + "Mensaje: " + $('#mensaje').val() + "\n";

			$.post(
			"send-mail.php",
			{to: to, subject: subject, message: message},
			function(data){
				if (data === "enviado"){
					alert('Muchas gracias. Su mensaje ha sido enviado');
				}

				else{
					alert('Su mensaje no se ha podido enviar. Pruebe de nuevo pasados unos minutos');
				}
			}
		);
		}
	});
});