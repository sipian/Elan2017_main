$(document).ready(function() {

    $('body').on("click", ".walktheramp", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('walktheramp'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });

   
    $('body').on("click", ".minutetowinit", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('minutetowinit'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });

    
    $('body').on("click", ".fieldkings", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('fieldkings'));
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

     
    
    $('body').on("click", ".convcoffee", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('convcoffee'));
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
