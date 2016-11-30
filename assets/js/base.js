$(document).ready(function(){ 
	$('#btn-search').on('click', function(event){
		$('#search-form').slideToggle();
		event.stopPropagation();
	});
	$('#search-form').on('click', function(event){
		event.stopPropagation();
	});

	$('#btn-slide-menu').on('click', function(event){
		$('#slide-menu').toggleClass('slide-menu-opened');
		$('#base-wrapper').toggleClass('faded');
		$('#main').toggleClass('pushed-main');
		event.stopPropagation();
	});
	$('#slide-menu').on('click', function(event){
		event.stopPropagation();
	});
});

$(document).on('click', function(){
	$('#search-form').slideUp();
	$('#slide-menu').removeClass('slide-menu-opened');
	$('#base-wrapper').removeClass('faded');
	$('#main').removeClass('pushed-main');
});