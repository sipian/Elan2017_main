$(document).ready(function() {


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
	if(window.location.href.indexOf("football") > -1){
		$(".online").trigger("click");
	}

	$('body').on("click", ".GOT", function() {
		alert('Game Of Thrones Fanatic Has Ended');
	});

	$('body').on("click", ".football", function() {
		$('.onlineBigDiv').hide("slide",{direction:"up"}, 450 , function(){
		$(".onlineBigDiv").html(getOnlineContent('football'));
		$('.onlineBigDiv').show('slide',{direction:"down"},450);
	   });
		window.history.pushState("", "", '#football');
	});

	
	
	$('body').on('click', "#backOnline", function() {
		setTimeout(function() {
			changeOnlineContent();
			$('.onlineDiv').css("display", "block");

		}, 50);

	});
});
