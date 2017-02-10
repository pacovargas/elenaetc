function validarEmail( email ) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return expr.test(email)
}

function validarNombre(nombre){
	if(nombre.length < 1)
		return false;
	else
		return true;
}

function validarTelefono(tel){
	var patt=new RegExp("^[1-9]{9}$");
	return patt.test(tel);
}

function validarCheckbox(cb_id){
	return $(cb_id).is(':checked')
}