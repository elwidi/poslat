$(function() {
	$('.date-picker').datepicker({
	    rtl: App.isRTL(),
	    orientation: "left",
	    autoclose: true
	});

	$('.validate').parsley();
	
});