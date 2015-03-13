//<![CDATA[
jQuery(document).ready(function($) {
	
	if( $.fn.tooltip() ) {
		$('[class="tooltip_hover"]').tooltip();
	}
	
	$(".carousel").jCarouselLite({
		btnNext : ".next",
		btnPrev : ".prev",
		easing : "swing", //efecto debe cargarse la libreria easing
		vertical : true,
		auto : 4000,
		speed : 500,
		visible : 3, //cantidad de items visibles
		scroll : 1,
		mouseWheel : true //se mueve con la rueda del mouse, debe cargarse la libreria mouseweel
	});



	$("#contact").submit(function() {
		$.ajax({
			type : "POST",
			url : "send_mail.php",
			dataType : "html",
			data : $(this).serialize(),
			beforeSend : function() {
				$("#loading").show();
			},
			success : function(response) {
				$("#response").html(response);
				$("#loading").hide();
			}
		})
		return false;
	});
	
	
	
	
	$("#newsletter").submit(function() {
		$.ajax({
			type : "POST",
			url : "newsletter.php",
			dataType : "html",
			data : $(this).serialize(),
			beforeSend : function() {
				$("#loadingNews").show();
			},
			success : function(response) {
				$("#responseNews").html(response);
				$("#loadingNews").hide();
			}
		})
		return false;
	});

	$(".video").fitVids();
	
	$('input, textarea').placeholder();

});
//]]>
