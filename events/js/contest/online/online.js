$(document).ready(function() {

	$('body').on("click", ".pixeladda", function() {
		$('.onlineBigDiv').hide("slide",{direction:"up"}, 450 , function(){
		$(".onlineBigDiv").html(getOnlineContent('pixeladda'));
		$('.onlineBigDiv').show('slide',{direction:"down"},450);
	   });     
	});

	
	$('body').on("click", ".zodiac", function() {
		$('.onlineBigDiv').hide("slide",{direction:"up"}, 450 , function(){
		$(".onlineBigDiv").html(getOnlineContent('zodiac'));
		$('.onlineBigDiv').show('slide',{direction:"down"},450);
	   });     
	});

	
	$('body').on("click", ".sweetheart", function() {
		$('.onlineBigDiv').hide("slide",{direction:"up"}, 450 , function(){
		$(".onlineBigDiv").html(getOnlineContent('sweetheart'));
		$('.onlineBigDiv').show('slide',{direction:"down"},450);
	   });     
	});

	
	$('body').on("click", ".tweetatale", function() {
		$('.onlineBigDiv').hide("slide",{direction:"up"}, 450 , function(){
		$(".onlineBigDiv").html(getOnlineContent('tweetatale'));
		$('.onlineBigDiv').show('slide',{direction:"down"},450);
	   });     
	});

	
	$('body').on("click", ".twistit", function() {
		$('.onlineBigDiv').hide("slide",{direction:"up"}, 450 , function(){
		$(".onlineBigDiv").html(getOnlineContent('twistit'));
		$('.onlineBigDiv').show('slide',{direction:"down"},450);
	   });     
	});

	
	$('body').on("click", ".skipit", function() {
		$('.onlineBigDiv').hide("slide",{direction:"up"}, 450 , function(){
		$(".onlineBigDiv").html(getOnlineContent('skipit'));
		$('.onlineBigDiv').show('slide',{direction:"down"},450);
	   });     
	});

	
	$('body').on("click", ".tellatale", function() {
		$('.onlineBigDiv').hide("slide",{direction:"up"}, 450 , function(){
		$(".onlineBigDiv").html(getOnlineContent('tellatale'));
		$('.onlineBigDiv').show('slide',{direction:"down"},450);
	   });     
	});

	
	$('body').on("click", ".whatsapp", function() {
		$('.onlineBigDiv').hide("slide",{direction:"up"}, 450 , function(){
		$(".onlineBigDiv").html(getOnlineContent('whatsapp'));
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
