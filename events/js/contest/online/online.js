$(document).ready(function() {

	$('body').on("click", ".paper", function() {
		$('.onlineBigDiv').hide("slide",{direction:"up"}, 450 , function(){
		$(".onlineBigDiv").html(getOnlineContent('paper'));
		$('.onlineBigDiv').show('slide',{direction:"down"},450);
	   });     
	});

	
	$('body').on('click', "#backOnline", function() {
		setTimeout(function() {
			changeOnlineContent();
			$('.onlineDiv').css("display", "block");

		}, 50);

	});
});
