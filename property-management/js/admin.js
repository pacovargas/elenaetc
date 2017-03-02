function refrescaMunicipios(municipios, id_municipio){
	var seleccionado = $("#provincia option:selected").val();
	var mun = municipios[seleccionado];
	var options = "";
	$(mun).each(function(index, el) {
		if(!id_municipio){
			if(el.nombre === "Cádiz")
				options = options + "<option value='" + el.id + "' selected='selected'>" + el.nombre + "</option>";
			else
				options = options + "<option value='" + el.id + "'>" + el.nombre + "</option>";
		}
		else{
			if(parseInt(el.id) === parseInt(id_municipio))
				options = options + "<option value='" + el.id + "' selected='selected'>" + el.nombre + "</option>";
			else
				options = options + "<option value='" + el.id + "'>" + el.nombre + "</option>";	
		}

	});
	$("#municipio").html(options);
}

$(function(){
	$("#cerrar-filtros").click(function(event) {
		event.preventDefault();
		$("#filtros").hide();
		$("#capa-cerrar-filtros").show();
		$("#tabla-propiedades").removeClass('col-md-10');
		$("#tabla-propiedades").addClass('col-md-12');
	});

	$("#mostrar-filtros").click(function(event) {
		event.preventDefault();
		$("#filtros").show();
		$("#capa-cerrar-filtros").hide();
		$("#tabla-propiedades").removeClass('col-md-12');
		$("#tabla-propiedades").addClass('col-md-10');
	});
});