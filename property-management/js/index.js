function refrescaMunicipios(municipios, id_municipio){
	var provincia = parseInt($("#provincia").val());
	var html = "<option value='0'></option>";
	var muns;

	if(provincia > 0){
		muns = municipios[provincia];
	}
	else{
		muns = new Array();
		$.each(municipios, function(id_prov, val) {
			$.each(val, function(index, mval) {
				muns.push(mval);
			});
		});
	}

	
	$.each(muns, function(index, val) {
		if(parseInt(val.id) === parseInt(id_municipio))
			html = html + "<option value='" + val.id + "' selected='selected'>" + val.nombre + "</option>";
		else
			html = html + "<option value='" + val.id + "'>" + val.nombre + "</option>";
	});

	$("#municipio").html(html);

}

$(function(){
	$('.carrusel-fotos').slick({
	  dots: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	  centerMode: true,
	  variableWidth: true
	});

	$("#provincia").change(function(event) {
		refrescaMunicipios(municipios, 0);		
	});

	$("a.paginador").click(function(event) {
		event.preventDefault();
		var pagina = $(this).data('pagina');
		$("#pagina").val(pagina);
		$("#filtrar").click();
	});

	refrescaMunicipios(municipios, id_municipio);
});