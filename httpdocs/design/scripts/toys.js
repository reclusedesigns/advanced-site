jQuery(document).ready(function($) {

	$('.tooltip_js').tooltip();
	
	$('.scrollto_js').click(function(e) {
		e.preventDefault();
		$.scrollTo($($(e.currentTarget).attr('href')), 300);
	});
	
	$('.js_contact_click').click(function() {
		$('.js_contact_toggle').slideToggle(function() {
    // Animation complete.
		});
	});
	
	$('#gallery .cover').hover(
        function(){$('span',this).slideToggle('fast');},
        function(){$('span',this).slideToggle('fast');
    });
	
	$('#slider').nivoSlider({
		pauseTime: 4000,
		effect: 'slideInLeft',
		directionNavHide: false,
	});
	
}); 