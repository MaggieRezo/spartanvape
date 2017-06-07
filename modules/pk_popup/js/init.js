$(document).ready(function () {

	if ($.cookie("pk_popup") != "true") {

		var newBreakpoint = $(window).width();

        if (newBreakpoint > 769) {
            var height = 450;
        	var width = 800;
        }
        else if ((newBreakpoint <= 768) && (newBreakpoint >= 481))  {
            var height = 270;
        	var width = 480;
        }
        else if (newBreakpoint <= 480)  {
            var height = 163;
        	var width = 290;
        }

		$.fancybox.open($('.pk_popup'), {
	        'padding' : 0,
	        'height' : height,
	        'width' : width,
	        'fitToView' : false,
   			'autoSize' : false,
	        'transitionIn'	: 'none',
			'transitionOut'	: 'none',
			'easingIn'      : 'none',
			'easingOut'     : 'none'
	    });

		$(".pk_popup").closest(".fancybox-overlay").addClass('pkpopup');
		$(".fancybox-skin").append("<div class='fancybox-close-overlay'></div>");

		$(".send-reqest").click(function(){
			var email = $("#newsletter-input-popup").val();
			$.ajax({
				type: "POST",
				headers: { "cache-control": "no-cache" },
				async: false,
				url: pk_popup_path,
				data: "name=marek&email="+email,
				success: function(data) {
					if (data)
						$(".send-response").text(data);
				}
			});
		});

	}

	$(".fancybox-close-overlay").click(function(e){
		$.cookie("pk_popup", "true");
		parent.$.fancybox.close();
	});

});