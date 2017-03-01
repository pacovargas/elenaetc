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