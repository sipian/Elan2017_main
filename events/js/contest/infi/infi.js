$(document).ready(function() {

    $('body').on("click", ".foodathon", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('foodathon'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });

   
    $('body').on("click", ".minutetowinit", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('minutetowinit'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });

    $('body').on("click", ".langaming", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('langaming'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });

     
    
    $('body').on("click", ".finaldestination", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('finaldestination'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });

     
    
    $('body').on("click", ".madads", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('madads'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });

     
    
    $('body').on("click", ".casino_royale", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('casino_royale'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });


    $('body').on("click", ".snake", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('snake'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });
    

     
    

    $('body').on('click', "#backInfi", function() {
        setTimeout(function() {
                changeInfiContent();
                 $('.infiDiv').css("display", "block");
            }, 50);
        });
});
