$(function(){
	$("#volver").click(function(event) {
		event.preventDefault();
		window.location = $(this).data('url');
	});
});