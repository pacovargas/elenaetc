function scrollTo(element, duration=500){
	$('html, body').animate({
        scrollTop: $(element).offset().top
    }, duration);
}