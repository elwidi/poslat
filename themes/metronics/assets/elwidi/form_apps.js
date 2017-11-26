$(function() {
	$('.date-picker').datepicker({
	    rtl: App.isRTL(),
	    orientation: "left",
	    autoclose: true
	});

	$('.validate').parsley();
	$.fn.select2.defaults.set("theme", "bootstrap");
	$(".select2, .select2-multiple").select2({
	    width: null
	});
	
});