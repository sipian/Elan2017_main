$(document).ready(function() {

    checkInfiInsideRegister();
    $('body').on("click", ".foodathon", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('foodathon'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
        window.history.pushState("", "", '#foodathon');
    });

   
    $('body').on("click", ".minutetowinit", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('minutetowinit'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
         window.history.pushState("", "", '#minutetowinit');
    });

    $('body').on("click", ".langaming", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('langaming'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });    
       window.history.pushState("", "", '#langaming'); 
    });

     
    
    $('body').on("click", ".finaldestination", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('finaldestination'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });  
       window.history.pushState("", "", '#finaldestination');   
    });

     
    
    $('body').on("click", ".madads", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('madads'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });   
       window.history.pushState("", "", '#madads');  
    });

     
    
    $('body').on("click", ".casino_royale", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('casino_royale'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });  
       window.history.pushState("", "", '#casino_royale');   
    });


    $('body').on("click", ".snake", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('snake'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       }); 
       window.history.pushState("", "", '#snake');    
    });


    $('body').on("click", ".convcoffee", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('convcoffee'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
        window.history.pushState("", "", '#convcoffee');
    });

    $('body').on("click", ".walk_the_ramp", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('walk_the_ramp'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });  
       window.history.pushState("", "", '#walk_the_ramp');   
    });


   

    $('body').on('click', "#backInfi", function() {
        setTimeout(function() {
                changeInfiContent();
                 $('.infiDiv').css("display", "block");
            }, 50);
        });
});
