$(function(){
	console.log('cargado');
	$('ul.nav li').removeClass('active');
	$('ul.nav li:nth-child(' + menu_nbr + ')').addClass('active');
});