$(document).ready(function() {

	$('body').on("click", ".paper", function() {
		$('.onlineBigDiv').hide("slide",{direction:"up"}, 450 , function(){
		$(".onlineBigDiv").html(getOnlineContent('paper'));
		$('.onlineBigDiv').show('slide',{direction:"down"},450);
	   });     
	});

	$('body').on("click", ".emblazon", function() {
		$('.onlineBigDiv').hide("slide",{direction:"up"}, 450 , function(){
		$(".onlineBigDiv").html(getOnlineContent('emblazon'));
		$('.onlineBigDiv').show('slide',{direction:"down"},450);
	   });
		window.history.pushState("", "", '#emblazon');
	});

	if(window.location.href.indexOf("emblazon") > -1){
		$(".online").trigger("click");
	}

	$('body').on('click', "#backOnline", function() {
		setTimeout(function() {
			changeOnlineContent();
			$('.onlineDiv').css("display", "block");

		}, 50);

	});
});
