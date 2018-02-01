$(document).ready(function(){
	$("#content-slider").lightSlider({
	    loop:true,
	    keyPress:true,
	    item:5,
	    slideMargin: 10,
	    autoWidth: false

	});

	var slider = $("#main-slider").lightSlider({
				    gallery:true,
				    item:1,
				    thumbItem:9,
				    slideMargin: 0,
				    loop:true,
				    onSliderLoad: function() {
	                    $('#main-slider').removeClass('cS-hidden');
	                }  
				});


	$("#overlay").click(function(e){
		if (e.target !== this)
	    return;
		$("#overlay").hide();
		return false;
	});

	$(".thumbnail").click(function(el){
		var index = $(this).data("id");
		$("#overlay").show();  
		slider.goToSlide(index);
	}); 

});

