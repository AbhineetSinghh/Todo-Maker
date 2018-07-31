$(function(){
	$('#show_register').click(function(){
		$('.register_form').show();
		$('.login_form').hide();
	});
	$('#show_login').click(function(){
		$('.login_form').show();
		$('.register_form').hide();
	});
	 $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
});
  // Preloader 
	$(window).on('load', function() {
		$("#status").delay(500).fadeOut();
		$("#preloader").delay(500).fadeOut("slow");
	});
$(document).ready(function() {
	// get current URL path and assign 'active' class
	var pathname = window.location.search;
	pathname=pathname.replace(/%20/g, " ");
	$('a[href$="'+pathname+'"]').parents('li').addClass('selectedClass');
});
